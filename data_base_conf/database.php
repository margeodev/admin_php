<?php
// Lê Registros
function DBRead($table, $params = null, $fields = '*')
{
    $params = ($params) ? " {$params}" : null;
    $query = "SELECT * FROM {$table}{$params}";
    $result = DBExecute($query);
    if (!mysqli_num_rows($result)) {
        return false;
    } else {
        while ($res = mysqli_fetch_assoc($result)) {
            $data[] = $res;
        }
        return $data;
    }
}

// Grava Registros
function DBInsert($tabke, array $data)
{
    $data = DBEscape($data);
    $fields = implode(', ', array_keys($data));
    $values = "'" . implode("', '", $data) . "'";
    $query = "INSERT INTO {$tabke} ($fields) VALUES ({$values})";
    return DBExecute($query);
}

// Executa Querys
function DBExecute($query)
{
    $link = DBConnect();
    $result = @mysqli_query($link, $query) or die(mysqli_error($link));
    DBClose($link);
    return $result;
}

