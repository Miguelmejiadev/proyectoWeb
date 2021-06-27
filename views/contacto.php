<body>
    <section class="container-fluid">
        <div class="row" style="padding: 60px;">
            <div class="col-12 text-center text-light" style="padding: 25px;">
                <h2>Envíenos un mensaje y le responderemos lo antes posible</h2>
            </div>
            <div class="col-5" id="leftPanel">
                <img src="./public/img/phone.jpg" width="100%">
                <br><br>
                <h6>
                    Photo by <a href="https://unsplash.com/@alex_andrews?utm_source=unsplash&utm_medium=referral&utm_content=creditCopyText">Alexander Andrews</a> on <a href="https://unsplash.com/s/photos/contact?utm_source=unsplash&utm_medium=referral&utm_content=creditCopyText">Unsplash</a>
                </h6>
            </div>
            <div class="col-7 text-info" id="right-panel">
                <form method="POST">
                    <div class="form-group">
                        <label for="f_name">
                            <h5>
                                Nombre completo
                            </h5>
                        </label>
                        <input type="text" class="form-control form-control-lg" id="f_name" aria-describedby="emailHelp" placeholder="nombre(s) apellido(s)" height="50px">
                    </div>
                    <br>
                    <div class="form-group">
                        <label for="f_email">
                            <h5>
                                Correo electrónico
                            </h5>
                        </label>
                        <input type="email" class="form-control form-control-lg" id="f_name" placeholder="tu@correo.com">
                    </div>
                    <br>
                    <div class="form-group">
                        <label for="f_email">
                            <h5>
                                Mensaje o razón
                            </h5>
                        </label>
                        <!-- <input type="email" class="form-control form-control-lg" id="f_name" placeholder="correo@dominio.com"> -->
                        <textarea class="form-control form-control-lg" id="exampleFormControlTextarea1" rows="3" placeholder="Escribe tu mensaje aquí"></textarea>
                    </div>
                    <br>
                    <button type="submit" class="btn btn-primary btn-lg btn-block">
                        Enviar
                    </button>
                </form>
            </div>
        </div>
    </section>
</body>