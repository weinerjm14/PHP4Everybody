<!-- setting variables and some form logic -->

<?php
    $userName = '';
    $email = "";
    $topic = '';
    // $userNameError = isset($_POST['userName']) && 
    // empty($_POST['userName']);
    // $emailError = isset($_POST['email']) && 
    // empty($_POST['email']);
    // $topicError = isset($_POST['topic']) && 
    // empty($_POST['topic']);
    // $success = !empty($userName) && !empty($email) && !empty($topic);

    if(isset($_POST['userName'])){
        $userName = $_POST['userName'];
    }

    if(isset($_POST['email'])){
        $email = $_POST['email'];
    }

    if(isset($_POST['topic'])){
        $topic = $_POST['topic'];
    }

?>

<!-- Styling for error and success messaging -->
<style>
    body {
        text-align: center;
    }
    section {
        margin: 2% auto;
    }
    label {
        text-align: left;
    }
    .error {
        background-color: #dc143c;
        color: #fff;
        font-size: 1.6em;
    }

    .success {
        background-color: #00b300;
        color: #fff;
        font-size: 1.6em;
        margin: 2% auto;
    }
</style>
<!-- HTML form with php elements using variables or if statements for error checking -->
<form method="POST">
    <section>
            <label for="userName">Your First Name *:</label>
            <input 
                type="text"
                value="<?php echo $userName; ?>"
                name="userName"
                required
            >
            <?php 
                if(isset($_POST['userName']) && 
                empty($_POST['userName'])) {
                   
                    echo " <section class='error'>
                            Missing Your Name
                        </section>";
                }
            ?>
        </section>

        <section>
            <label for="email">Your Email *:</label>
            <input 
                type="text"
                value="<?php echo $email; ?>"
                name="email"
                required
            >
            <?php 
                if(isset($_POST['email']) && 
                empty($_POST['email'])) {
                   
                    echo " <section class='error'>
                            Missing Email
                        </section>";
                }
            ?>
        </section>

        <section>
            <label for="topic"> How Can We Help*:</label>
            <input 
                type="text"
                value="<?php echo $topic; ?>"
                name="topic"
                required
            >
            <?php 
                if(isset($_POST['topic']) && 
                empty($_POST['topic'])) {
                   
                    echo " <section class='error'>
                            Missing Topic (How Can We Help)
                        </section>";
                }
            ?>
        </section>

        <button> Send This Off! </button>

        <section class="success">
                <?php
                    if(!empty($userName) && !empty($email) && !empty($topic)){
                        echo "Hi, $userName! We will contact you at $email about $topic.";
                    }
                ?>
        </section>
        





</form>
