<?php
session_start();

require_once 'dbconfig.php';

$conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);

<<<<<<< HEAD
$stmt = $conn->prepare("SELECT * FROM users");
$stmt->execute();
$results = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

    <header>
        <ul>
            <li><img src="images/bug.png" alt="bug" /></li>
            <li>
                <h3>BugMe Issue Tracker</h3>
            </li>
        </ul>
    </header>

    <aside>
        <!-- Sidebar -->
        <div id="sidebar-contents">
            <ul>
                <li class="sidebar-option" id="home">
                    <img src="images/home.png" alt="home"/>Home
                </li>
                <li class="sidebar-option" id="user">
                    <img src="images/new_user.png" alt="new-user"/>Add User
                </li>
                <li class="sidebar-option" id="issue">
                    <img src="images/new_page.png" alt="new-issue"/>New Issue
                </li>
                <li class="sidebar-option" id="logout">
                    <img src="images/login.png" alt="logout"/>Logout
                </li>
            </ul>
        </div>
    </aside>

    <div id="grid-wrapper">
        <main>
            <div class="area">
                <form id="new-issue" method="post">
                    <h2>Create Issue</h2>

                    <label>Title</label>
                    <input id="new-issue-title" type="text" name="title" required>
                    
                    <label>Description</label>
                    <textarea id="new-issue-desc" id="desc" type="text" name="desc" required></textarea>
                    
                    <label>Assigned To</label>
                    <select id="new-issue-assigned" name="assigned">
                    <?php foreach($results as $result){ ?>
                        <option value="<?php echo $result["firstname"]." ".$result["lastname"];?>"><?php echo $result["firstname"]." ".$result["lastname"];?></option>
                    <?php } ?>
                    </select>

                    <label>Type</label>
                    <select id="add-issue-type" name="type">
                        <option value="Bug">Bug</option>
                        <option value="Proposal">Proposal</option>
                        <option value="Task">Task</option>
                    </select>

                    <label>Priority</label>
                    <select id="add-issue-priority" name="priority">
                        <option value="Critical">Critical</option>
=======

$title = htmlspecialchars(filter_input(INPUT_GET,'title',FILTER_SANITIZE_STRING));

$desc = htmlspecialchars(filter_input(INPUT_GET,'desc',FILTER_SANITIZE_STRING));

$type = htmlspecialchars(filter_input(INPUT_GET,'type',FILTER_SANITIZE_STRING));

$priority = htmlspecialchars(filter_input(INPUT_GET,'priority',FILTER_SANITIZE_STRING));

$status = "Open";

$assigned = htmlspecialchars(filter_input(INPUT_GET,'assigned',FILTER_SANITIZE_STRING));

$names = explode(" ", $assigned);
$fname = $names[0];
$lname = $names[1];

$stmt = $conn->prepare("SELECT id FROM users WHERE firstname='$fname' AND lastname='$lname'");
$stmt->execute();
$results = $stmt->fetch(PDO::FETCH_ASSOC);
$assigned_id = $results['id'];

$created_by = $_SESSION["ID"];

$created_date = $updated_date = date("Y-m-d h:i:s");

$stmt = $conn->prepare("INSERT INTO issues (title,description,type,priority,status,assigned_to,created_by,created,updated) VALUES (?,?,?,?,?,?,?,?,?)");
$stmt->execute([$title,$desc,$type,$priority,$status,$assigned_id,$created_by,$created_date,$updated_date]);

<<<<<<<< HEAD:issue.php
                    <label>Priority</label>
                    <select id="add-issue-priority" name="priority">
                    <option value="Critical">Critical</option>
>>>>>>> e713d6d62b7a934c6a04462efae4030465d8b87e
                        <option value="Major">Major</option>
                        <option value="Minor">Minor</option>
                    </select>
                    <button id="issueSubmit" name="newIssue" type="button">Submit</button>
                </form>
            </div>
        </main>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script>
        $.getScript("js/app.js");
<<<<<<< HEAD
    </script>
=======
    </script>
========
echo "done";
?>
>>>>>>>> e713d6d62b7a934c6a04462efae4030465d8b87e:createissue.php
>>>>>>> e713d6d62b7a934c6a04462efae4030465d8b87e
