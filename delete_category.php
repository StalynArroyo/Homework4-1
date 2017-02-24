<?php 
require_once('database.php');
echo 'Something';
// Get IDs
$category_id = filter_input(INPUT_POST, 'category_id', FILTER_VALIDATE_INT);
echo 'categoryId = '.$category_id;
// Delete the category from the database
if ($category_id != false) 
{
   echo "inside if";
    $query = 'DELETE FROM categories
              WHERE categoryID = :CategoryID';
    $statement = $db->prepare($query);
    $statement->bindValue(':CategoryID',$category_id);
    $success = $statement->execute();
    $statement->closeCursor();    
}

// Display the Category List page
include('category_list.php');

?>
