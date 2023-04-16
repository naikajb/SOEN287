<!DOCTYPE html>
<html lang="en">
<header>
    <?php
    if (isset($_POST['logout'])) {
        session_destroy();
    } ?>
    <div>
        <table>
            <tr>

                <td class="company-name">
                    A Cat and Dog For All
                </td>
                <td>
                    <a href="Desktop/SOEN287other/a3_40227367/Q4/home.php">
                        <img id="logo" src="logo.png" alt="logo">
                    </a>
                </td>
                <th>
                    <button type="button" id="headerLoginButton" onclick="document.location='login.php'">Login</button>
                </th>
                <th>
                    <form method="POST">
                        <button type="button" id="headerLogoutButton" name="logout"
                                onclick="window.alert('You have sucessfully logged out!')">Logout
                        </button>
                    </form>
                </th>
            </tr>
        </table>
        <p id="date"></p>
    </div>
</header>
</html>
