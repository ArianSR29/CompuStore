<div class="c-main-login">
    <form action="actions/iniciar_sesion.php" class="reg-form" method="POST">
        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
            <input
                class="mdl-textfield__input"
                type="email"
                id="tb-mail"
                name="tb-mail"
                required="required">
                <label class="mdl-textfield__label" for="tb-mail">Email</label>
            </div>
            <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                <input
                    class="mdl-textfield__input"
                    type="password"
                    id="tb-password"
                    name="tb-password"
                    required="required">
                    <label class="mdl-textfield__label" for="tb-password">Contraseña</label>
                </div>
                <button class="mdl-button mdl-js-button mdl-button--primary">Iniciar Sesión</button>
            </form>
        </div>