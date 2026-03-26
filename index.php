<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Регистрация</title>
<link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="form-container">
        <h2>Регистрация</h2>
        
        <form action="action.php" method="POST">
            <div class="form-group">
                <label for="name">Имя:</label>
                <input 
                    type="text" 
                    id="name" 
                    name="name" 
                    placeholder="Введите имя"
                    required
                >
            </div>

            <div class="form-group">
                <label for="email">Почта:</label>
                <input 
                    type="email" 
                    id="email" 
                    name="email" 
                    placeholder="name@example.ru"
                    required
                >
            </div>

            <div class="form-group">
                <label for="password">Пароль:</label>
                <input 
                    type="password" 
                    id="password" 
                    name="password" 
                    placeholder="Введите пароль"
                    required
                >
            </div>

            <div class="form-group">
                <label for="confirm_password">Подтвердите пароль:</label>
                <input 
                    type="password" 
                    id="confirm_password" 
                    name="confirm_password" 
                    placeholder="Повторите пароль"
                    required
                >
            </div>
 <div class="form-group div1">
                <label class="t" for="gender" >Мужской  </label>
		<input type="radio" id="gender" name="gender">
		<label class="t" for="gender1" >Женский  </label>
		<input type="radio" id="gender" name="gender">
            </div>


            <button type="submit">Зарегистрироваться</button>

            <div class="checkbox-group">
                <input 
                    type="checkbox" 
                    id="agreement" 
                    name="agreement"
                    required
                >
                <label for="agreement">
                    Создавая учетную запись, вы соглашаетесь с нашими 
                    <a href="#">Условиями использования</a>
                </label>
            </div>
        </form>
    </div>
</body>
</html>
