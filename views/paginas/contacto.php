<main class="contenedor seccion">
        <h1 data-cy="heading-contacto">Contacto</h1>

        <?php if($mensaje) { ?>
               <p data-cy="alerta-envio-formulario" class='alerta exito'><?php echo $mensaje; ?></p>;
        <?php }  ?>

        <picture>
            <source srcset="build/img/destacada3.webp" type="image/webp">
            <source srcset="build/img/destacada3.jpg" type="image/jepg">
            <img loading="lazy" srcset="build/img/destacada3.jpg" alt="Imagen contacto">
        </picture>

        <h2 data-cy="heading-formulario">Rellene el formulario de contacto</h2>

        <form data-cy="formulario-contacto" class="formulario" action="/contacto" method="POST">
            <fieldset>
                <legend>Información Personal</legend>

                <label for="nombre">Nombre</label>
                <input data-cy="input-nombre" type="text" placeholder="Tu nombre" id="nombre" name="contacto[nombre]" >

                <label for="mensaje">Mensaje</label>
                <textarea data-cy="input-mensaje" id="mensaje" name="contacto[mensaje]" ></textarea>
            </fieldset>

            <fieldset>
                <legend>Información sobre la propiedad</legend>

                <label for="opciones">Vende o Compra</label>
                <select data-cy="input-opciones" id="opciones" name="contacto[tipo]" >
                    <option value="" disabled selected>-- Seleccione --</option>
                    <option value="Compra">Compra</option>
                    <option value="Vende">Vende</option>
                </select>

                    <label for="presupuesto">Precio o Presupuesto</label>
                    <input data-cy="input-precio" type="number" placeholder="Tu Precio o Presupuesto" id="presupuesto" name="contacto[precio]" >
            </fieldset>

            <fieldset>
                <legend>Contacto</legend>

                <p>Cómo desea ser contactado:</p>

                <div class="forma-contacto">
                    <label for="contactar-telefono">Teléfono</label>
                    <input data-cy="forma-contacto" type="radio" value="telefono" id="contactar-telefono" name="contacto[contacto]" >

                    <label for="contactar-email">E-mail</label>
                    <input data-cy="forma-contacto" type="radio" value="email" id="contactar-email" name="contacto[contacto]" >
                </div>

                <div id="contacto"></div>

            </fieldset>

            <input type="submit" value="Enviar" class="boton-verde">
           
        </form>

    </main>