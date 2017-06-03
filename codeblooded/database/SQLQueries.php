<?php
require_once("config_database.php");

function insert_feedback($name, $email, $phone, $website, $message) {
    GLOBAL $con;

    $sql_count_records = "SELECT * FROM FEEDBACK_SESSION";
    error_log($sql_count_records, 0);
    $result_count_records = mysqli_query($con, $sql_count_records);
    $num_of_records = mysqli_num_rows($result_count_records) + 1;

    $sql_add_feedback = "INSERT INTO FEEDBACK_SESSION (ID, NAME, EMAIL, PHONE, WEBSITE, MESSAGE)
            VALUES(' $num_of_records', '$name', '$email', '$phone', '$website', '$message')";
    if (mysqli_query($con, $sql_add_feedback)) {
	    error_log("Feedback Added", 0);
		return true;
	} else {
	    error_log("Error in feeback addition" . $sql_add_feedback . "<br>" . mysqli_error($con), 0);
		return false;
	}
}

function insert_message($name, $email, $message){
    GLOBAL $con;

    $sql_count_records = "SELECT * FROM MESSAGES";
    error_log($sql_count_records, 0);
    $result_count_records = mysqli_query($con, $sql_count_records);
    $num_of_records = mysqli_num_rows($result_count_records) + 1;

    $sql_add_message = "INSERT INTO MESSAGES (ID, NAME, EMAIL, MESSAGE)
            VALUES(' $num_of_records', '$name', '$email', '$message')";
    if (mysqli_query($con, $sql_add_message)) {
        error_log("Feedback Added", 0);
        return true;
    } else {
        error_log("Error in feeback addition" . $sql_add_message . "<br>" . mysqli_error($con), 0);
        return false;
    }
}

function get_blog_count(){
    GLOBAL $con;

    $sql_get_blog = "SELECT * FROM BLOGS";
    echo "<script> alert(". $sql_get_blog ."); </script>";
    error_log($sql_get_blog, 0);
    $result_blog = mysqli_query($con, $sql_get_blog);
    return mysqli_num_rows($result_blog);
}

function get_blog($blog_id){
    GLOBAL $con;

    $total_blogs = get_blog_count();
    if($total_blogs < $blog_id){
        header('location: ../error/404.html');
        return false;
    }

    $sql_get_blog = "SELECT * FROM BLOGS WHERE ID=".$blog_id;
    error_log($sql_get_blog, 0);
    $result_blog = mysqli_query($con, $sql_get_blog);
    return $result_blog;
}

function get_blog_title($blog_id){
    GLOBAL $con;

    $sql_get_blog = "SELECT TITLE FROM BLOGS WHERE ID=".$blog_id;
    error_log($sql_get_blog, 0);
    $result_blog = mysqli_query($con, $sql_get_blog);
    if($result = mysqli_fetch_assoc($result_blog)){
        return $result['TITLE'];
    }
    header('location: ../error/404.html');
}

function get_blog_home_content($blog_id){
    GLOBAL $con;

    $sql_get_blog = "SELECT HOME_CONTENT FROM BLOGS WHERE ID=".$blog_id;
    error_log($sql_get_blog, 0);
    $result_blog = mysqli_query($con, $sql_get_blog);
    if($result = mysqli_fetch_assoc($result_blog)){
        return $result['HOME_CONTENT'];
    }
    header('location: ../error/404.html');
}

function get_blog_image_name($blog_id){
    GLOBAL $con;

    $sql_get_blog = "SELECT IMAGE_NAME FROM BLOGS WHERE ID=".$blog_id;
    error_log($sql_get_blog, 0);
    $result_blog = mysqli_query($con, $sql_get_blog);
    if($result = mysqli_fetch_assoc($result_blog)){
        return $result['IMAGE_NAME'];
    }
    header('location: ../error/404.html');
}

function get_project($project_id){
    GLOBAL $con;

    $sql_get_project = "SELECT * FROM PROJECTS WHERE PROJECT_ID=".$project_id;
    error_log($sql_get_project, 0);
    $result_project = mysqli_query($con, $sql_get_project);
    return $result_project;
}
?>
