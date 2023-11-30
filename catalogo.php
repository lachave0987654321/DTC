<!DOCTYPE html>
<html>
<head>
    <title>Catálogo de Productos</title>
    <a href="index.html">
        <img src="logo.jpeg" width="150" height="150" alt="Logo de la tienda">
    </a>
    <style>
        body {
            background-color: #333;
            color: #fff;
            font-family: Arial, sans-serif;
            text-align: center;
        }

        h1 {
            color: #ffcc00;
            text-shadow: 2px 2px 4px #000;
        }

        .producto {
            border: 1px solid #555;
            margin: 10px;
            padding: 10px;
            text-align: center;
            display: inline-block;
            background-color: #444;
            box-shadow: 4px 4px 6px #000;
        }

        #carrito {
            border: 1px solid #555;
            margin: 20px;
            padding: 10px;
            background-color: #222;
            box-shadow: 4px 4px 6px #000;
        }

        input[type="number"] {
            width: 50px;
            padding: 5px;
            background-color: #555;
            color: #fff;
            border: none;
        }

        button {
            background-color: #ffcc00;
            color: #333;
            padding: 5px 10px;
            border: none;
            cursor: pointer;
        }

        button:hover {
            background-color: #ffdb4d;
        }

        ul {
            list-style: none;
            padding: 0;
        }

        li {
            margin: 5px 0;
        }

        #carrito-lista {
            text-align: left;
        }

        #total-pagar {
            font-size: 1.2em;
            font-weight: bold;
            color: #ffcc00;
        }
    </style>
</head>
<body>
    <h1>Catálogo de Productos</h1>
    <div class="producto">
        <img src="/img/desodorante.png">
        <p>Precio: $20</p>
        <label for="cantidad1">Cantidad:</label>
        <input type="number" id="cantidad1" value="0">
        <button onclick="agregarAlCarrito(1, 1)">Agregar al carrito</button>
    </div>
    <div class="producto">
        <img src="/img/nivea.jpg">
        <p>Precio: $50</p>
        <label for="cantidad2">Cantidad:</label>
        <input type="number" id="cantidad2" value="0">
        <button onclick="agregarAlCarrito(2, 2)">Agregar al carrito</button>
    </div>
    <div class="producto">
        <img src="/img/aceite.jpg">
        <p>Precio: $25</p>
        <label for="cantidad3">Cantidad:</label>
        <input type="number" id="cantidad3" value="0">
        <button onclick="agregarAlCarrito(3, 30)">Agregar al carrito</button>
    </div>
    <div class="producto">
        <img src="/img/azucar (1).jpg">
        <p>Precio: $50</p>
        <label for="cantidad4">Cantidad:</label>
        <input type="number" id="cantidad4" value="0">
        <button onclick="agregarAlCarrito(4, 40)">Agregar al carrito</button>
    </div>
    <div class="producto">
        <img src="/img/colgate.png">
        <p>Precio: $50</p>
        <label for="cantidad5">Cantidad:</label>
        <input type="number" id="cantidad5" value="0">
        <button onclick="agregarAlCarrito(5, 50)">Agregar al carrito</button>
    </div>
    <div class="producto">
        <img src="/img/jugo (1).jpg">
        <p>Precio: $20</p>
        <label for="cantidad6">Cantidad:</label>
        <input type="number" id="cantidad6" value="0">
        <button onclick="agregarAlCarrito(6, 60)">Agregar al carrito</button>
    </div>
    <div class="producto">
        <img src="/img/suavitel.jpg">
        <p>Precio: $25</p>
        <label for="cantidad7">Cantidad:</label>
        <input type="number" id="cantidad7" value="0">
        <button onclick="agregarAlCarrito(7, 70)">Agregar al carrito</button>
    </div>
    <div class="producto">
        <img src="/img/cloro.jpg">
        <p>Precio: $50</p>
        <label for="cantidad8">Cantidad:</label>
        <input type="number" id="cantidad8" value="0">
        <button onclick="agregarAlCarrito(8, 80)">Agregar al carrito</button>
    </div>
    <div class="producto">
        <img src="/img/ace.jpg">
        <p>Precio: $95</p>
        <label for="cantidad9">Cantidad:</label>
        <input type="number" id="cantidad9" value="0">
        <button onclick="agregarAlCarrito(9, 90)">Agregar al carrito</button>
    </div>
    <div class="producto">
        <img src="/img/zote.jpg">
        <p>Precio: $10</p>
        <label for="cantidad10">Cantidad:</label>
        <input type="number" id="cantidad9" value="0">
        <button onclick="agregarAlCarrito(10, 100)">Agregar al carrito</button>
    </div>
    <div class="producto">
        <img src="/img/hb.png">
        <p>Precio: $90</p>
        <label for="cantidad9">Cantidad:</label>
        <input type="number" id="cantidad9" value="0">
        <button onclick="agregarAlCarrito(9, 90)">Agregar al carrito</button>
    </div>
    <div class="producto">
        <img src="/img/hs.jpg">
        <p>Precio: $90</p>
        <label for="cantidad9">Cantidad:</label>
        <input type="number" id="cantidad9" value="0">
        <button onclick="agregarAlCarrito(9, 90)">Agregar al carrito</button>
    </div>
    <div class="producto">
        <img src="/img/atun.jpg">
        <p>Precio: $25</p>
        <label for="cantidad9">Cantidad:</label>
        <input type="number" id="cantidad9" value="0">
        <button onclick="agregarAlCarrito(9, 90)">Agregar al carrito</button>
    </div>
    <div class="producto">
        <img src="/img/pantene.jpg">
        <p>Precio: $90</p>
        <label for="cantidad9">Cantidad:</label>
        <input type="number" id="cantidad9" value="0">
        <button onclick="agregarAlCarrito(9, 90)">Agregar al carrito</button>
    </div>
    <div class="producto">
        <img src="/img/suero.jpg">
        <p>Precio: $40</p>
        <label for="cantidad9">Cantidad:</label>
        <input type="number" id="cantidad9" value="0">
        <button onclick="agregarAlCarrito(9, 90)">Agregar al carrito</button>
    </div>
    <div class="producto">
        <h2>Producto 16</h2>
        <p>Precio: $90</p>
        <label for="cantidad9">Cantidad:</label>
        <input type="number" id="cantidad9" value="0">
        <button onclick="agregarAlCarrito(9, 90)">Agregar al carrito</button>
    </div>
    <div class="producto">
        <h2>Producto 17</h2>
        <p>Precio: $90</p>
        <label for="cantidad9">Cantidad:</label>
        <input type="number" id="cantidad9" value="0">
        <button onclick="agregarAlCarrito(9, 90)">Agregar al carrito</button>
    </div>
    <div class="producto">
        <h2>Producto 18</h2>
        <p>Precio: $90</p>
        <label for="cantidad9">Cantidad:</label>
        <input type="number" id="cantidad9" value="0">
        <button onclick="agregarAlCarrito(9, 90)">Agregar al carrito</button>
    </div>
    <div class="producto">
        <h2>Producto 19</h2>
        <p>Precio: $90</p>
        <label for="cantidad9">Cantidad:</label>
        <input type="number" id="cantidad9" value="0">
        <button onclick="agregarAlCarrito(9, 90)">Agregar al carrito</button>
    </div>
    <div class="producto">
        <h2>Producto 20</h2>
        <p>Precio: $90</p>
        <label for="cantidad9">Cantidad:</label>
        <input type="number" id="cantidad9" value="0">
        <button onclick="agregarAlCarrito(9, 90)">Agregar al carrito</button>
    </div>
    <div class="producto">
        <h2>Producto 21</h2>
        <p>Precio: $90</p>
        <label for="cantidad9">Cantidad:</label>
        <input type="number" id="cantidad9" value="0">
        <button onclick="agregarAlCarrito(9, 90)">Agregar al carrito</button>
    </div>
    <div class="producto">
        <h2>Producto 22</h2>
        <p>Precio: $90</p>
        <label for="cantidad9">Cantidad:</label>
        <input type="number" id="cantidad9" value="0">
        <button onclick="agregarAlCarrito(9, 90)">Agregar al carrito</button>
    </div>
    <div class="producto">
        <h2>Producto 23</h2>
        <p>Precio: $90</p>
        <label for="cantidad9">Cantidad:</label>
        <input type="number" id="cantidad9" value="0">
        <button onclick="agregarAlCarrito(9, 90)">Agregar al carrito</button>
    </div>
    <div class="producto">
        <h2>Producto 24</h2>
        <p>Precio: $90</p>
        <label for="cantidad9">Cantidad:</label>
        <input type="number" id="cantidad9" value="0">
        <button onclick="agregarAlCarrito(9, 90)">Agregar al carrito</button>
    </div>
    <div class="producto">
        <h2>Producto 25</h2>
        <p>Precio: $90</p>
        <label for="cantidad9">Cantidad:</label>
        <input type="number" id="cantidad9" value="0">
        <button onclick="agregarAlCarrito(9, 90)">Agregar al carrito</button>
    </div>
    <div class="producto">
        <h2>Producto 26</h2>
        <p>Precio: $90</p>
        <label for="cantidad9">Cantidad:</label>
        <input type="number" id="cantidad9" value="0">
        <button onclick="agregarAlCarrito(9, 90)">Agregar al carrito</button>
    </div>
    <div class="producto">
        <h2>Producto 27</h2>
        <p>Precio: $90</p>
        <label for="cantidad9">Cantidad:</label>
        <input type="number" id="cantidad9" value="0">
        <button onclick="agregarAlCarrito(9, 90)">Agregar al carrito</button>
    </div>
    <div class="producto">
        <h2>Producto 28</h2>
        <p>Precio: $90</p>
        <label for="cantidad9">Cantidad:</label>
        <input type="number" id="cantidad9" value="0">
        <button onclick="agregarAlCarrito(9, 90)">Agregar al carrito</button>
    </div>
    <div class="producto">
        <h2>Producto 29</h2>
        <p>Precio: $90</p>
        <label for="cantidad9">Cantidad:</label>
        <input type="number" id="cantidad9" value="0">
        <button onclick="agregarAlCarrito(9, 90)">Agregar al carrito</button>
    </div>
    <div class="producto">
        <h2>Producto 30</h2>
        <p>Precio: $90</p>
        <label for="cantidad9">Cantidad:</label>
        <input type="number" id="cantidad9" value="0">
        <button onclick="agregarAlCarrito(9, 90)">Agregar al carrito</button>
    </div>
    <div class="producto">
        <h2>Producto 31</h2>
        <p>Precio: $90</p>
        <label for="cantidad9">Cantidad:</label>
        <input type="number" id="cantidad9" value="0">
        <button onclick="agregarAlCarrito(9, 90)">Agregar al carrito</button>
    </div>
    <div class="producto">
        <h2>Producto 32</h2>
        <p>Precio: $90</p>
        <label for="cantidad9">Cantidad:</label>
        <input type="number" id="cantidad9" value="0">
        <button onclick="agregarAlCarrito(9, 90)">Agregar al carrito</button>
    </div>
    <div class="producto">
        <h2>Producto 33</h2>
        <p>Precio: $90</p>
        <label for="cantidad9">Cantidad:</label>
        <input type="number" id="cantidad9" value="0">
        <button onclick="agregarAlCarrito(9, 90)">Agregar al carrito</button>
    </div>
    <div class="producto">
        <h2>Producto 34</h2>
        <p>Precio: $90</p>
        <label for="cantidad9">Cantidad:</label>
        <input type="number" id="cantidad9" value="0">
        <button onclick="agregarAlCarrito(9, 90)">Agregar al carrito</button>
    </div>
    <div class="producto">
        <h2>Producto 35</h2>
        <p>Precio: $90</p>
        <label for="cantidad9">Cantidad:</label>
        <input type="number" id="cantidad9" value="0">
        <button onclick="agregarAlCarrito(9, 90)">Agregar al carrito</button>
    </div>
    <div class="producto">
        <h2>Producto 36</h2>
        <p>Precio: $90</p>
        <label for="cantidad9">Cantidad:</label>
        <input type="number" id="cantidad9" value="0">
        <button onclick="agregarAlCarrito(9, 90)">Agregar al carrito</button>
    </div>
    <div class="producto">
        <h2>Producto 37</h2>
        <p>Precio: $90</p>
        <label for="cantidad9">Cantidad:</label>
        <input type="number" id="cantidad9" value="0">
        <button onclick="agregarAlCarrito(9, 90)">Agregar al carrito</button>
    </div>
    <div class="producto">
        <h2>Producto 38</h2>
        <p>Precio: $90</p>
        <label for="cantidad9">Cantidad:</label>
        <input type="number" id="cantidad9" value="0">
        <button onclick="agregarAlCarrito(9, 90)">Agregar al carrito</button>
    </div>
    <div class="producto">
        <h2>Producto 39</h2>
        <p>Precio: $90</p>
        <label for="cantidad9">Cantidad:</label>
        <input type="number" id="cantidad9" value="0">
        <button onclick="agregarAlCarrito(9, 90)">Agregar al carrito</button>
    </div>
    <div class="producto">
        <h2>Producto 40</h2>
        <p>Precio: $90</p>
        <label for="cantidad9">Cantidad:</label>
        <input type="number" id="cantidad9" value="0">
        <button onclick="agregarAlCarrito(9, 90)">Agregar al carrito</button>
    </div>
    <div class="producto">
        <h2>Producto 41</h2>
        <p>Precio: $90</p>
        <label for="cantidad9">Cantidad:</label>
        <input type="number" id="cantidad9" value="0">
        <button onclick="agregarAlCarrito(9, 90)">Agregar al carrito</button>
    </div>
    <div class="producto">
        <h2>Producto 42</h2>
        <p>Precio: $90</p>
        <label for="cantidad9">Cantidad:</label>
        <input type="number" id="cantidad9" value="0">
        <button onclick="agregarAlCarrito(9, 90)">Agregar al carrito</button>
    </div>
    <div class="producto">
        <h2>Producto 43</h2>
        <p>Precio: $90</p>
        <label for="cantidad9">Cantidad:</label>
        <input type="number" id="cantidad9" value="0">
        <button onclick="agregarAlCarrito(9, 90)">Agregar al carrito</button>
    </div>
    <div class="producto">
        <h2>Producto 44</h2>
        <p>Precio: $90</p>
        <label for="cantidad9">Cantidad:</label>
        <input type="number" id="cantidad9" value="0">
        <button onclick="agregarAlCarrito(9, 90)">Agregar al carrito</button>
    </div>
    <div class="producto">
        <h2>Producto 45</h2>
        <p>Precio: $90</p>
        <label for="cantidad9">Cantidad:</label>
        <input type="number" id="cantidad9" value="0">
        <button onclick="agregarAlCarrito(9, 90)">Agregar al carrito</button>
    </div>
    <div class="producto">
        <h2>Producto 46</h2>
        <p>Precio: $90</p>
        <label for="cantidad9">Cantidad:</label>
        <input type="number" id="cantidad9" value="0">
        <button onclick="agregarAlCarrito(9, 90)">Agregar al carrito</button>
    </div>
    <div class="producto">
        <h2>Producto 47</h2>
        <p>Precio: $90</p>
        <label for="cantidad9">Cantidad:</label>
        <input type="number" id="cantidad9" value="0">
        <button onclick="agregarAlCarrito(9, 90)">Agregar al carrito</button>
    </div>
    <div class="producto">
        <h2>Producto 48</h2>
        <p>Precio: $90</p>
        <label for="cantidad9">Cantidad:</label>
        <input type="number" id="cantidad9" value="0">
        <button onclick="agregarAlCarrito(9, 90)">Agregar al carrito</button>
    </div>
    <div class="producto">
        <h2>Producto 49</h2>
        <p>Precio: $90</p>
        <label for="cantidad9">Cantidad:</label>
        <input type="number" id="cantidad9" value="0">
        <button onclick="agregarAlCarrito(9, 90)">Agregar al carrito</button>
    </div>
    <div class="producto">
        <h2>Producto 50</h2>
        <p>Precio: $90</p>
        <label for="cantidad9">Cantidad:</label>
        <input type="number" id="cantidad9" value="0">
        <button onclick="agregarAlCarrito(9, 90)">Agregar al carrito</button>
    </div>



    <!-- Agrega más productos aquí -->
 <div id="carrito">
        <h2>Carrito de Compras</h2>
        <ul id="carrito-lista">
        </ul>
        <p>Total a pagar: $<span id="total-pagar">0</span></p>
    </div>

    <script>
        let carrito = {};
        function agregarAlCarrito(productoId, precio) {
            const cantidad = parseInt(document.getElementById(`cantidad${productoId}`).value);

            if (cantidad > 0) {
                if (carrito[productoId]) {
                    carrito[productoId].cantidad += cantidad;
                } else {
                    carrito[productoId] = {
                        cantidad,
                        precio
                    };
                }

                actualizarCarrito();
            }
        }

        function actualizarCarrito() {
            const carritoLista = document.getElementById("carrito-lista");
            carritoLista.innerHTML = "";
            let totalPagar = 0;

            for (const productoId in carrito) {
                const producto = carrito[productoId];
                const subtotal = producto.cantidad * producto.precio;

                totalPagar += subtotal;

                const listItem = document.createElement("li");
                listItem.textContent = `Producto ${productoId}: Cantidad ${producto.cantidad}, Subtotal: $${subtotal}`;
                carritoLista.appendChild(listItem);
            }

            document.getElementById("total-pagar").textContent = totalPagar;
        }
    </script>
</body>
</html>
