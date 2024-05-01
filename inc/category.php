<?php
include '../inc/connect.php';
class category
{
    private $connection;
    private $categoryId = 0;
    private $categoryName = '';
    public function __construct($connection, $categoryId, $categoryName)
    {
        $this->connection = $connection;
        $this->categoryId = $categoryId;
        $this->categoryName = $categoryName;
    }
    public function saveCategory($connection, $categoryName = '')
    {
        $this->categoryName = $_POST['categoryName'];

        $insertCategorySql = "INSERT INTO category (categoryName) VALUES ('$categoryName')";
        $insertResult = $this->connection->query($connection, $insertCategorySql);

        if ($insertResult) {
            echo "<script>alert('Category has been inserted successfully')</script>";
        }
    }

    public function getCategoryId()
    {
        return $this->categoryId;
    }
    public function setCategoryId($categoryId)
    {
        $this->categoryId = $categoryId;
    }
    public function getCategoryName()
    {
        return $this->categoryName;
    }
    public function setCategoryName($categoryName)
    {
        $this->categoryName = $categoryName;
    }
}