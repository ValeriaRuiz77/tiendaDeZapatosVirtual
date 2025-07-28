<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>La Tienda de Zapatos - EL BUENO</title>
    <link rel="stylesheet" href="estilos.css">
    <script src="script.js" defer></script>
</head>
<body>
    <header>
        <div class="titulo-centrado">
            <h1>¡BIENVENID@ A LA TIENDA VIRTUAL!</h1>
            <h2>EL BUENO</h2>
        </div>
        <nav class="enlaces">
            <a href="#productos-hombre">Hombre</a>
            <a href="#productos-mujer">Mujer</a>
        </nav>
        <div class="buscador-carrito">
            <input type="text" id="buscador" placeholder="Buscar productos...">
            <button id="carrito">🛒 Carrito</button>
        </div>
    </header>

    <main>
        <section id="productos-hombre">
            <h3>ZAPATOS PARA HOMBRE</h3>
            <div class="productos">
                <!-- Producto 1 Hombre -->
                <div class="producto">
                    <img src="Imagenes/casualH (2).webp" alt="Zapato Casual Hombre">
                    <h4>Zapato Casual Hombre</h4>
                    <p>Precio: $165.000</p>
                    <p>Talla: 38-39-40-41</p>
                    <p>Este zapato es ideal para el día a día, cómodo y elegante.</p>
                    <button class="comprar">Comprar</button>
                    <button class="añadir-carrito">Añadir al carrito</button>
                    
                </div>
                <!-- Producto 2 Hombre -->
                <div class="producto">
                    <img src="Imagenes/deportivoH.avif" alt="Zapato Deportivo Hombre">
                    <h4>Zapato Deportivo Hombre</h4>
                    <p>Precio: $170.000</p>
                    <p>Talla: 38-39-40-41-43</p>
                    <p>Perfecto para actividades deportivas, ofrece gran comodidad.</p>
                    <button class="comprar">Comprar</button>
                    <button class="añadir-carrito">Añadir al carrito</button>
                    
                </div>
                <!-- Producto 3 Hombre -->
                <div class="producto">
                    <img src="Imagenes/formalH.webp" alt="Zapato Formal Hombre">
                    <h4>Zapato Formal Hombre</h4>
                    <p>Precio: $150.000</p>
                    <p>Talla: 38-39-40-41-43</p>
                    <p>Zapato elegante para ocasiones formales, muy cómodo.</p>
                    <button class="comprar">Comprar</button>
                    <button class="añadir-carrito">Añadir al carrito</button>
                    
                </div>
            </div>
        </section>

        <section id="productos-mujer">
            <h3>ZAPATOS PARA MUJER</h3>
            <div class="productos">
                <!-- Producto 1 Mujer -->
                <div class="producto">
                    <img src="Imagenes/casualesM.webp" alt="Zapato Casual Mujer">
                    <h4>Zapato Casual Mujer</h4>
                    <p>Precio: $140.000</p>
                    <p>Talla: 35-36-37-38</p>
                    <p>Confortable y moderno, ideal para el uso diario.</p>
                    <button class="comprar">Comprar</button>
                    <button class="añadir-carrito">Añadir al carrito</button>
                    
                </div>
                <!-- Producto 2 Mujer -->
                <div class="producto">
                    <img src="Imagenes/deportivoM.webp" alt="Zapato Deportivo Mujer">                                       
                    <h4>Zapato Deportivo Mujer</h4>
                    <p>Precio: $185.000</p>
                    <p>Talla: 35-36-37</p>
                    <p>Ideal para actividades físicas y deportes, con gran tracción.</p>
                    <button class="comprar">Comprar</button>
                    <button class="añadir-carrito">Añadir al carrito</button>
                    
                </div>
                <!-- Producto 3 Mujer -->
                <div class="producto">
                    <img src="Imagenes/formalM.webp" alt="Zapato Formal Mujer">
                    <h4>Zapato Formal Mujer</h4>
                    <p>Precio: $120.000</p>
                    <p>Talla: 35-36-37-38</p>
                    <p>Elegante y sofisticado, ideal para eventos formales.</p>
                    <button class="comprar">Comprar</button>
                    <button class="añadir-carrito">Añadir al carrito</button>
                    <button class="añadir carrito">Añadir al carrito</button>
                    
                </div>
            </div>
        </section>
    </main>

    <!-- Formulario de compra que aparece en la misma página -->
    <div id="formulario-compra" style="display: none; background-color: #fff; padding: 20px; border: 1px solid #ccc; width: 400px; margin: 20px auto; box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);">
        <h3>Por favor ingresa tus datos para finalizar la compra:</h3>
        <form id="form-compra">
            <label for="nombre">Nombre:</label>
            <input type="text" id="nombre" name="nombre" required><br><br>
            
            <label for="apellidos">Apellidos:</label>
            <input type="text" id="apellidos" name="apellidos" required><br><br>
            
            <label for="cedula">Cédula:</label>
            <input type="text" id="cedula" name="cedula" required><br><br>
            
            <label for="telefono">Teléfono:</label>
            <input type="text" id="telefono" name="telefono" required><br><br>
            <label for="correo">Correo electrónico:</label>
            <input type="email" id="correo" name="correo" required><br><br>
            
            <label for="direccion">Dirección de Envío:</label>
            <input type="text" id="direccion" name="direccion" required><br><br>

            <label for="direccion">Talla de zapato:</label>
            <input type="text" id="direccion" name="direccion" required><br><br>
            
            <label for="metodo_pago">Método de Pago:</label>
            <select id="metodo_pago" name="metodo_pago" required>
                <option value="tarjeta">Tarjeta de Crédito</option>
                <option value="paypal">PayPal</option>
            </select><br><br>
            
            <label for="cuenta_pago">Cuenta de Pago:</label>
            <input type="text" id="cuenta_pago" name="cuenta_pago" required><br><br>
            
            <button type="submit">Confirmar Compra</button>
            <button type="button" id="cancelar-compra">Cancelar</button>
        </form>
    </div>

    <footer>
        <p>&copy; 2025 EL BUENO - Todos los derechos reservados</p>
    </footer>
</body>
</html>
