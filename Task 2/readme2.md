# Steps for creating a simple form in HTML, PHP, and phpMyAdmin:

#### demo video --> 

### Create a new HTML file. Begin with the HTML form tags, and within that the form element and the input element:

    <form action="yourscript.php" method="post">
        <input type="text" name="name" />
        <input type="submit" name="submit" value="Submit" />
    </form>

----------------------------------------------------------------------------------------------------------------------------------------------------------------------

### Create a PHP script that will process the data. This script will contain the code to connect to the database and insert the data into a table.

    <?php
    if ($_POST['submit']) {
        $name = $_POST['name'];
        $db = mysqli_connect("localhost", "username", "password", "my_db");
        $sql = "INSERT INTO form_table (name) VALUES ('$name');";
        mysqli_query($db,$sql);
        mysqli_close($db);
    }
    ?>

----------------------------------------------------------------------------------------------------------------------------------------------------------------------

### Create a database table to store the form data. This can be done using a tool such as phpMyAdmin. 

    CREATE TABLE form_table (
        id INT NOT NULL AUTO_INCREMENT,
        name VARCHAR(100) NOT NULL,
        PRIMARY KEY (id)
    );

----------------------------------------------------------------------------------------------------------------------------------------------------------------------

### Test the form to make sure it works properly.

----------------------------------------------------------------------------------------------------------------------------------------------------------------------

### Once the form is tested, the form is complete and ready to use.
