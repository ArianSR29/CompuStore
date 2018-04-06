<div class="c-main-registro">
    <form action="actions/insertar_usuario.php" class="reg-form" method="POST">
        <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
            <input
                class="mdl-textfield__input"
                type="text"
                name="tb-nombre"
                id="tb-nombre"
                required="required">
                <label class="mdl-textfield__label" for="tb-nombre">Nombre</label>
            </div>
            <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                <input
                    class="mdl-textfield__input"
                    type="text"
                    id="tb-apellidos"
                    name="tb-apellidos"
                    required="required">
                    <label class="mdl-textfield__label" for="tb-apellidos">Apellidos</label>
                </div>
                <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                    <input
                        class="mdl-textfield__input"
                        type="text"
                        id="tb-username"
                        name="tb-username"
                        required="required">
                        <label class="mdl-textfield__label" for="tb-username">Nombre de usuario</label>
                    </div>
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
                            <button class="mdl-button mdl-js-button mdl-button--primary">Registrarse</button>
                        </form>
                    </div>