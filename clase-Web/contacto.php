<?php include "includes/headers.php"?>

    <section>
        <h2>Contactanos</h2>
        --Imagen
    </section>
    <section>
        <h2>Llena el formulario de Contacto</h2>
        <form action="">
            <fieldset>
                <legend>Informacion Personal</legend>
                <div>
                    <label for="name">Nombre</label>
                    <input type="text" name="name" id="name" placeholder="Escribe tu nombre">
                </div>
                <div>
                    <label for="email">Email</label>
                    <input type="text" name="email" id="email" placeholder="tu@email.com">
                </div>
                <div>
                    <label for="phone">Phone</label>
                    <input type="text" name="phone" id="phone" placeholder="555-555-55-55">
                </div>
                <div>
                    <label for="msg">Mensaje</label>
                    <textarea name="msg" id="msg" placeholder="Escribe tu mensaje"></textarea>
                </div>
            </fieldset>
                <legend>Informacion sobre la propiedad</legend>
                <div>
                    <label for="vencom">Vende o compra</label>
                    <input type="select" name="vencom" id="vencom">
                    <div>
                        <label for="cantidad">Cantidad</label>
                        <input type="number" name="cantidad" id="cantidad">
                    </div>
                </div>
            <fieldset>
                <legend>Contacto</legend>
                <div>
                    <label for="tel">Telefono</label>
                    <input type="radio" name="Telefono" id="telefono">
                    <label for="email">Email</label>
                    <input type="radio" name="email" id="email">
                </div>
                <div>
                    <label for="Fecha">Fecha</label>
                    <input type="date" name="Fecha" id="Fecha">
                    <label for="hora">Hora</label>
                    <input type="time" name="hora" id="hora">
                </div>
            </fieldset>
            <div>
                <button>Contactar</button>
            </div>
        </form>
<?php include "includes/footer.php"?>