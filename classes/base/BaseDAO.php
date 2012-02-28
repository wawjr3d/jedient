<?php
	require_once dirname(__FILE__) . "/MySQLDatabaseConnection.php";

	abstract class BaseDAO {
		
		abstract protected function populateItem(&$item, $data);
		abstract protected function getInsertValues($item);
		abstract protected function getUpdateValues($item);
	
		public function getAll($howmany = 0, $offset = 0) {
			return $this->getByQuery(static::SELECT_ALL_FROM . static::TABLE_NAME, $howmany, $offset);
		}
			
		public function getById($id = 0) {
			$items = $this->getByQuery(static::SELECT_ALL_FROM . static::TABLE_NAME . " WHERE id=$id", 1);

			return count($items) > 0 ? $items[0] : null;
		}
		
		public function getByQuery($query = '', $howmany = 0, $offset = 0) {

			$itemClass = static::ITEM_CLASS;
			$items = array();

			$con = new MySQLDatabaseConnection();

			try {
				$con->connect();

				$offset = $offset > 0 ? " OFFSET $offset" : "";
				$limit = $howmany > 0 ? " LIMIT $howmany" : "";

				$query = $query . $limit . $offset;

				$result = $con->executeQuery($query);

				if (isset($result) && $result != NULL && mysql_num_rows($result) > 0) {
					while($data = mysql_fetch_array($result, MYSQL_ASSOC)) {

						$item = new $itemClass();

						if ($this->populateItem($item, $data)) {
							$item->setInDB(true);
						}

						$items[] = $item;
					}
				}
			} catch(MySQLDatabaseConnectionException $mysqle) {

			}

			$con->close();

			return $items;
		}
	
		public function save(&$item = null) {

			$itemClass = static::ITEM_CLASS;
			$result = false;

			if ($item instanceof $itemClass) {

				$con = new MySQLDatabaseConnection();

				if ($item->isInDB() === false) {
					try {
						$con->connect();

						$query = "INSERT INTO " . static::TABLE_NAME . " (" . static::INSERT_FIELDS . ") values";
						$query .= $this->getInsertValues($item);

						$result = $con->executeQuery($query);

						if ($result === true) {
							$item->setInDB(true);

							$query = "SELECT LAST_INSERT_ID() AS last_id FROM " . static::TABLE_NAME;

							$lastIdResult = $con->executeQuery($query);
							$lastId = 0;

							if (isset($lastIdResult) && $result != NULL && mysql_num_rows($lastIdResult) > 0) {
								while($data = mysql_fetch_array($lastIdResult, MYSQL_ASSOC)) {
									$lastId = $data["last_id"];
								}
							}
							
							$query = "SELECT updated_time AS updated_time FROM " . static::TABLE_NAME . " WHERE id=" . $lastId;

							$updatedTimeResult = $con->executeQuery($query);
							$updatedTime = null;

							if (isset($updatedTimeResult) && $result != NULL && mysql_num_rows($updatedTimeResult) > 0) {
								while($data = mysql_fetch_array($updatedTimeResult, MYSQL_ASSOC)) {
									$updatedTime = $data["updated_time"];
								}
							}

							$item->setId($lastId);
							$item->setUpdatedTime($updatedTime);
						} else {
							throw new MySQLDatabaseConnectionException('Could not insert: ' . mysql_error());
						}
					} catch(MySQLDatabaseConnectionException $mysqle) {

					}

				} else {
					try {
						$con->connect();

						$query = "UPDATE " . static::TABLE_NAME . " SET ";
						$query .= $this->getUpdateValues($item);
						$query .= " WHERE id=" . $item->getId();

						$result = $con->executeQuery($query);

						if ($result === false) { throw new MySQLDatabaseConnectionException('Could not update: ' . mysql_error()); }
					} catch(MySQLDatabaseConnectionException $mysqle) {

					}
				}

				$con->close();
			}

			return $result;
		}

		public function delete(&$item = null) {
			$item->setIsActive(false);
			
			if ($this->save($item)) {
				unset($item);
			}
		}
	
	}