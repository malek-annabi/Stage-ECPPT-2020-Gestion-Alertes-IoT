       <?php
session_start();
if (isset($_POST['username'])&&isset($_POST['password'])) {
    // On se connecte à la base de données
    include_once 'getconnection.php';
    // On vérifie s'il y a un user avec  ses credentials
    $req = "select username,password from iot_users where username = :username and password = :password ";
    $reponse = $bdd->prepare($req);
    $reponse->execute(array(
        'username' => $_POST['username'],
        'password' => $_POST['password']
    ));
    $user = $reponse->fetch(PDO::FETCH_OBJ);
    //    Si oui
    //    *         ajouter les infos nécessaires à la session
    //    *         on redirige vers l'espace
    if ($user) {
        $_SESSION['user'] = $_POST['username'];
        $sql = "select id from iot_users where username = :username";
        $response = $bdd->prepare($sql);
        $response->execute(array(
            'username'=>$_POST['username']
        ));
        $id= $response->fetchALL(PDO::FETCH_COLUMN);
        $_SESSION['UID']=$id[0];
        header('location: Dashboard.php');
        //echo $_SESSION['UID'];
    } else /*Bad Credentials*/ {
        header('location: login.html');
    }
} else /*Si pas de post*/ {
    header('location: login.html');
}
        ?>