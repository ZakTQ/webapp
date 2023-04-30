<div class="container">
    <h3 class="text-center mb-3">Регистрация аккаунта</h3>
<!-- enctype="multipart/form-data" -->

    <form class="MyFormReg" method="post" action="do_register.php" enctype="multipart/form-data">
        <div class="mb-3">
            <label for="full_name" class="form-label">Имя</label>
            <input type="text" class="form-control" id="full_name" name="full_name" required>
        </div>
        <div class="mb-3">
            <label for="login" class="form-label">Логин</label>
            <input type="text" class="form-control" id="login" name="login" required>
        </div>
        <div class="mb-3">
            <label for="avatar" class="form-label">Аватар</label>
            <input type="file" class="form-control" id="avatar" name="avatar" required>
        </div>
        <div class="mb-3">
            <label for="login" class="form-label">Email</label>
            <input type="email" class="form-control" id="email" name="email" required>
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">Пароль</label>
            <input type="password" class="form-control" id="password" name="password" required>
        </div>
        <div class="mb-3">
            <label for="password_confirm" class="form-label">Подтвердите пароль</label>
            <input type="password" class="form-control" id="password_confirm" name="password_confirm" required>
        </div>
        <button type="submit" class="btn btn-primary">Регистрация</button>
    </form>

</div>