@component('admin::layouts.app')
    <div class="container ">
        <div class="row ">
            <!-- Primera Card -->
            <div class="col-md-4 col-lg-3 mb-4">
                <div class="card h-100 text-center" style="box-shadow: 0px 0px 20px 0px #504f4f;">
                    <h5><br></h5>
                    <svg xmlns="http://www.w3.org/2000/svg" width="50%" height="50%" fill="currentColor"
                        class="bi bi-car-front-fill mx-auto"" viewBox="0 0 16 16">
                        <path
                            d="M2.52 3.515A2.5 2.5 0 0 1 4.82 2h6.362c1 0 1.904.596 2.298 1.515l.792 1.848c.075.175.21.319.38.404.5.25.855.715.965 1.262l.335 1.679q.05.242.049.49v.413c0 .814-.39 1.543-1 1.997V13.5a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1-.5-.5v-1.338c-1.292.048-2.745.088-4 .088s-2.708-.04-4-.088V13.5a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1-.5-.5v-1.892c-.61-.454-1-1.183-1-1.997v-.413a2.5 2.5 0 0 1 .049-.49l.335-1.68c.11-.546.465-1.012.964-1.261a.8.8 0 0 0 .381-.404l.792-1.848ZM3 10a1 1 0 1 0 0-2 1 1 0 0 0 0 2m10 0a1 1 0 1 0 0-2 1 1 0 0 0 0 2M6 8a1 1 0 0 0 0 2h4a1 1 0 1 0 0-2zM2.906 5.189a.51.51 0 0 0 .497.731c.91-.073 3.35-.17 4.597-.17s3.688.097 4.597.17a.51.51 0 0 0 .497-.731l-.956-1.913A.5.5 0 0 0 11.691 3H4.309a.5.5 0 0 0-.447.276L2.906 5.19Z" />
                    </svg>
                    </svg>
                    <div class="card-body">
                        <h5 class="card-title">Vehiculos</h5>
                        <a href="admin/vehiculos" class="btn w-100"
                            style="background: linear-gradient(90deg, rgba(135,113,234,1) 0%, rgba(125,114,234,1) 19%, 
                        rgba(120,119,241,1) 44%, rgba(110,117,233,1) 64%, rgba(99,118,232,1) 86%, rgba(2,0,36,1) 135%); 
                        border-radius: 15px; color: white">
                            Abrir
                        </a>
                    </div>
                </div>
            </div>

            <!-- Segunda Card -->
            <div class="col-md-4 col-lg-3 mb-4">

                <div class="card h-100 text-center" style="box-shadow: 0px 0px 20px 0px #504f4f;">
                    <h5><br></h5>
                    <svg xmlns="http://www.w3.org/2000/svg" width="50%" height="50%" fill="currentColor"
                        class="bi bi-person-circle mx-auto" viewBox="0 0 16 16">
                        <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0" />
                        <path fill-rule="evenodd"
                            d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8m8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1" />
                    </svg>
                    <div class="card-body">
                        <h5 class="card-title">Choferes</h5>
                        <a href="admin/choferes" class="btn w-100"
                            style="background: linear-gradient(90deg, rgba(135,113,234,1) 0%, rgba(125,114,234,1) 19%, 
                        rgba(120,119,241,1) 44%, rgba(110,117,233,1) 64%, rgba(99,118,232,1) 86%, rgba(2,0,36,1) 135%); 
                        border-radius: 15px; color: white">
                            Abrir
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-lg-3 mb-4">

                <div class="card h-100 text-center" style="box-shadow: 0px 0px 20px 0px #504f4f;">
                    <h5><br></h5>
                    <svg xmlns="http://www.w3.org/2000/svg" width="50%" height="50%" fill="currentColor"
                        class="bi bi-wrench-adjustable mx-auto"" viewBox="0 0 16 16">
                        <path d="M16 4.5a4.5 4.5 0 0 1-1.703 3.526L13 5l2.959-1.11q.04.3.041.61" />
                        <path
                            d="M11.5 9c.653 0 1.273-.139 1.833-.39L12 5.5 11 3l3.826-1.53A4.5 4.5 0 0 0 7.29 6.092l-6.116 5.096a2.583 2.583 0 1 0 3.638 3.638L9.908 8.71A4.5 4.5 0 0 0 11.5 9m-1.292-4.361-.596.893.809-.27a.25.25 0 0 1 .287.377l-.596.893.809-.27.158.475-1.5.5a.25.25 0 0 1-.287-.376l.596-.893-.809.27a.25.25 0 0 1-.287-.377l.596-.893-.809.27-.158-.475 1.5-.5a.25.25 0 0 1 .287.376M3 14a1 1 0 1 1 0-2 1 1 0 0 1 0 2" />
                    </svg>
                    <div class="card-body">
                        <h5 class="card-title">Mantenimiento</h5>
                        <a href="admin/mantenimiento" class="btn w-100"
                            style="background: linear-gradient(90deg, rgba(135,113,234,1) 0%, rgba(125,114,234,1) 19%, 
                        rgba(120,119,241,1) 44%, rgba(110,117,233,1) 64%, rgba(99,118,232,1) 86%, rgba(2,0,36,1) 135%); 
                        border-radius: 15px; color: white">
                            Abrir
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-lg-3 mb-4">

                <div class="card h-100 text-center" style="box-shadow: 0px 0px 20px 0px #504f4f;">
                    <h5><br></h5>
                    <svg xmlns="http://www.w3.org/2000/svg" width="50%" height="" fill="currentColor"
                        class="bi bi-arrow-down-circle-fill mx-auto"" viewBox="0 0 16 16">
                        <path
                            d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0M8.5 4.5a.5.5 0 0 0-1 0v5.793L5.354 8.146a.5.5 0 1 0-.708.708l3 3a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 10.293z" />
                    </svg>
                    <div class="card-body">
                        <h5 class="card-title">Entradas</h5>
                        <a href="admin/entradas" class="btn w-100"
                            style="background: linear-gradient(90deg, rgba(135,113,234,1) 0%, rgba(125,114,234,1) 19%, 
                        rgba(120,119,241,1) 44%, rgba(110,117,233,1) 64%, rgba(99,118,232,1) 86%, rgba(2,0,36,1) 135%); 
                        border-radius: 15px; color: white">
                            Abrir
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 col-lg-3 mb-4">

                <div class="card h-100 text-center" style="box-shadow: 0px 0px 20px 0px #504f4f;">
                    <h5><br></h5>
                    <svg xmlns="http://www.w3.org/2000/svg" width="50%" height="50%" fill="currentColor"
                        class="bi bi-arrow-up-circle-fill mx-auto"" viewBox="0 0 16 16">
                        <path
                            d="M16 8A8 8 0 1 0 0 8a8 8 0 0 0 16 0m-7.5 3.5a.5.5 0 0 1-1 0V5.707L5.354 7.854a.5.5 0 1 1-.708-.708l3-3a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1-.708.708L8.5 5.707z" />
                    </svg>
                    <div class="card-body">
                        <h5 class="card-title">Salidas</h5>
                        <a href="admin/salida" class="btn w-100"
                            style="background: linear-gradient(90deg, rgba(135,113,234,1) 0%, rgba(125,114,234,1) 19%, 
                        rgba(120,119,241,1) 44%, rgba(110,117,233,1) 64%, rgba(99,118,232,1) 86%, rgba(2,0,36,1) 135%); 
                        border-radius: 15px; color: white">
                            Abrir
                        </a>
                    </div>
                </div>
            </div>



        </div>
    </div>
@endcomponent
