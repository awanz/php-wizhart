<?php
    /**
     * PHP Mysql Base Function (2021-03-22)
     * Github: https://github.com/awanz/php-mysqli-base
     * By: Awan
     */
    class MySQLBase {
        
        protected $connection;
        public $hostinfo;

        public function __construct($hostname, $database, $username, $password) {
            $this->connection = new mysqli($hostname, $username, $password, $database);
            if ($this->connection->connect_errno) {
                echo "Failed to connect to MySQL: (" . $this->connection->connect_errno . ") " . $this->connection->connect_error;
            }
            $this->hostinfo = $this->connection->host_info ;
        }

        function __destruct() {
            $this->connection->close();
        }

        public function query($query) {
            $result = $this->connection->query($query);
            
            return $result;
        }

        public function getAll($tableName) {
            $query = "SELECT * FROM " . $tableName;
            $result = $this->connection->query($query);
            
            return $result;
        }
        
        public function getBy($tableName, $keyWhere, $valueWhere) {
            $query = "SELECT * FROM " . $tableName . " WHERE " . $keyWhere . " = " . $valueWhere;
            $result = $this->connection->query($query);
            
            return $result;
        }
        
        public function getByArray($tableName, $arrayWhere) {
            $where = null;
            foreach ($arrayWhere as $key => $value) {
                $where .= $key . " = '" . $value . "'";
                $where .= " AND "; 
            }

            $where = substr($where, 0, -5);
            
            $query = "SELECT * FROM " . $tableName . " WHERE " . $where;
            $result = $this->connection->query($query);
            
            return $result;
        }
        
        public function getLike($tableName, $keyWhere, $valueWhere) {
            $query = "SELECT * FROM " . $tableName . " WHERE " . $keyWhere . " LIKE " . $valueWhere;
            $result = $this->connection->query($query);

            return $result;
        }

        public function insert($tableName, $dataArray) {
            /*
                INSERT INTO table_name
                (column1, column2, column3, ...)
                VALUES
                (values1, values2, values3, ...)
            */
            $entry = null;
            foreach ($dataArray as $key => $value) {
                if (is_numeric($value)) {
                    $entry = $entry . $value . ', ';
                } else {
                    if (preg_match("/\/[a-z]*>/i", $value ) != 0) {
                        $entry = $entry . '"' . addslashes($value) . '", ';  
                    } else {
                        $entry = $entry . '"' . $value . '", ';
                    }
                }
            }

            $entry = rtrim($entry, ", ");
            $arrayKeys = array_keys($dataArray);
            
            $column = null;
            foreach ($arrayKeys as $value) {
                $column = $column . $value . ", ";
            }
            $column = rtrim($column, ", ");
            
            $query = "INSERT INTO " . $tableName . " (" . $column . ") VALUES (" . $entry . ")";

            $queryact = $this->connection->query($query);
          
            $result = null;
            
            if (!$queryact) {
                $result['status'] = 0;
                $result['message'] = "Query failed: (" . $this->connection->errno . ") " . $this->connection->error;
            }else{
                $result['status'] = 1;
                $result['message'] = "Add successful!";
                $result['last_id'] = $this->connection->insert_id;
            }
            
            return $result;
        }

        public function delete($tableName, $keyWhere, $valueWhere) {
            /*
                DELETE FROM table_name
                WHERE condition;
            */
            $query = "DELETE FROM " . $tableName . " WHERE " . $keyWhere . " = " . $valueWhere;
            $queryact = $this->connection->query($query);

            if (!$this->connection->affected_rows) {
                $result['status'] = 0;
                $result['message'] = "Query failed: (" . $this->connection->errno . ") " . $this->connection->error;
            }else{
                $result['status'] = 1;
                $result['message'] = "Delete successful!";
            }
            return $result;
        }

        public function update($tableName, $dataArray, $keyWhere, $valueWhere) {
            /*
                UPDATE table_name
                SET column1 = value1, column2 = value2, ...
                WHERE condition;
            */
            $set = null;
            $arrayKeys = array_keys($dataArray);
            foreach ($arrayKeys as $key) {
                if (is_numeric($dataArray[$key])) {
                    $set = $set . $key . " = " . $dataArray[$key] . ", ";
                }else {
                    if (preg_match("/\/[a-z]*>/i", $dataArray[$key] ) != 0) {
                        $set = $set . $key . " = '" . addslashes($dataArray[$key]) . "', ";
                    } else {
                        $set = $set . $key . " = '" . $dataArray[$key] . "', ";
                    }
                }
            }
            $set = rtrim($set, ", ");
            $query = "UPDATE " . $tableName . " SET " . $set . " WHERE " . $keyWhere . " = " . $valueWhere;
        
            $queryact = $this->connection->query($query);
            
            $result = null;
            
            if (!$this->connection->affected_rows) {
                $result['status'] = 0;
                $result['message'] = "Query failed: (" . $this->connection->errno . ") " . $this->connection->error;
            }else{
                $result['status'] = 1;
                $result['message'] = "Edit successful!";
            }
            
            return $result;
        }
    }