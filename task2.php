<body>
<form method="post">
    <table>

        <tr>
            <td>
                <textarea name="comment" placeholder="Enter your comment here" cols="35" rows="7"></textarea>
            </td>
        </tr>

        <tr>
            <td>
                <input type="text" name="name" placeholder="Enter your name" required>
            </td>
        </tr>

        <tr>
            <td>
                <input type="text" name="address" placeholder="Enter your address">
            </td>
        </tr>

        <tr>
            <td>
                <input type="text" name="email" placeholder="Enter your email">
            </td>
        </tr>

        <tr>
            <td>
                <input type="tel" name="phone" placeholder="Enter your telephone without +7" required>
            </td>
        </tr>

        <tr>
            <td>
                <input type="file" name="file">
            </td>
        </tr>
        <tr>
            <td>
                <input type="submit" name="submit">
            </td>
        </tr>
    </table>
</form>
</body>

<?php

if (isset($_POST['submit'])) {

    if ($_POST['name'] == null || $_POST['phone'] == null) echo 'Введите ФИО и телефон'; //повторная проверка обязательных полей

    $email = $_POST['email'];

    $index = strpos($email, '@');

    $email = substr($email, $index + 1);

    if(!preg_match("/^[0-9]{10,10}+$/", $_POST['phone']))
        echo "Телефон задан в неверном формате";
    elseif ($email == 'gmail.com')
        echo 'Регистрация пользователей с таким почтовым адресом невозможна!';
    else echo 'Ваш комментарий зарегистрирован!';
}