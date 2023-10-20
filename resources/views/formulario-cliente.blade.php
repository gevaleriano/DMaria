<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Formulario conoce a tu cliente</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
<div class="container">
<figure class="text-center">
  <blockquote class="blockquote">
    <h2>D'MARIA, S.A. de C.V.</h2>
  </blockquote>
  <figcaption class="blockquote-footer">
    "FRMULARIO CONOCE A TU CLIENTE"
  </figcaption>
</figure>

<form>
<div class="card">
  <div class="card-header">
    Informacion del cliente
  </div>
  <div class="card-body">
    <div class="row">
        <div class="col-3">
            <label for="cliente" class="form-label">Codigo de cliente</label>
            <input type="text" class="form-control form-control-sm" id="codigo" aria-describedby="codigo">
        </div>
        <div class="col-3" >
            <label for="fecha" class="form-label">Fecha</label>
            <input type="date" class="form-control form-control-sm" id="fecha">
        </div>
        <div class="col-6" >
            <label for="ruta" class="form-label">Ruta despacho</label>
            <input type="text" class="form-control form-control-sm" id="ruta">
        </div>
    </div>
    <div class="row">
        <div class="col-4">
            <label for="lmacen" class="form-label">Almacen</label>
            <input type="text" class="form-control form-control-sm" id="almacen" aria-describedby="emailHelp">
        </div>
        <div class="col-4" >
            <label for="accion" class="form-label">Tipo accion</label>
            <select id="accion" class="form-select form-select-sm" aria-label="Small select example">
                <option selected>Abrir opciones</option>
                <option value="1">Cliente nuevo</option>
                <option value="2">Actualizacion de datos</option>
                <option value="3">Modificacion/Reactivacion</option>
            </select>
        </div>
        <div class="col-4" >
            <label for="accion" class="form-label">Tipo cliente</label>
            <select id="accion" class="form-select form-select-sm" aria-label="Small select example">
                <option selected>Abrir opciones</option>
                <option value="1">Institucional</option>
                <option value="2">Supermercado</option>
                <option value="3">Mercado</option>
            </select>
        </div>
    </div>
    <div class="row">
        <div class="col-4" >
            <label for="impuesto" class="form-label">Impuesto</label>
            <select id="impuesto" class="form-select form-select-sm" aria-label="Small select example">
                <option selected>Abrir opciones</option>
                <option value="1">Exento</option>
                <option value="2">IVA</option>
                <option value="3">Percepcion</option>
            </select>
        </div>
        
    </div>
  </div>
</div>
<div class="clearfix">&nbsp;</div>
<div class="card">
  <div class="card-header">
    Informacion General del cliente
  </div>
  <div class="card-body">
    <div class="row">
        <div class="col-6">
            <label for="razon" class="form-label">Nombre completo o razon social</label>
            <input type="text" class="form-control form-control-sm" id="razon" aria-describedby="codigo">
        </div>
        <div class="col-6" >
            <label for="nombre-comercial" class="form-label">Nombre Comercial</label>
            <input type="text" class="form-control form-control-sm" id="nombre-comercial">
        </div>
    </div>

    <div class="row">
        <div class="col-4">
            <label for="giro" class="form-label">Giro</label>
            <input type="text" class="form-control form-control-sm" id="giro" aria-describedby="emailHelp">
        </div>
        <div class="col-8">
            <label for="domicilio" class="form-label">Domicilio</label>
            <input type="text" class="form-control form-control-sm" id="domicilio" aria-describedby="emailHelp">
        </div>
        
    </div>
    <div class="row">
        <div class="col-4">
            <label for="departamento" class="form-label">Departamento</label>
            <input type="text" class="form-control form-control-sm" id="departamento" aria-describedby="codigo">
        </div>
        <div class="col-4" >
            <label for="municipio" class="form-label">Municipio</label>
            <input type="text" class="form-control form-control-sm" id="municipio">
        </div>
        <div class="col-4" >
            <label for="pais" class="form-label">Pais</label>
            <input type="text" class="form-control form-control-sm" id="pais">
        </div>
    </div>
    <div class="row">
        <div class="col-3">
            <label for="dui" class="form-label">DUI</label>
            <input type="text" class="form-control form-control-sm" id="dui" aria-describedby="codigo">
        </div>
        <div class="col-3" >
            <label for="nit" class="form-label">NIT</label>
            <input type="text" class="form-control form-control-sm" id="nit">
        </div>
        <div class="col-3" >
            <label for="nrc" class="form-label">NRC</label>
            <input type="text" class="form-control form-control-sm" id="nrc">
        </div>
        <div class="col-3" >
            <label for="pasaporte" class="form-label">Pasaporte</label>
            <input type="text" class="form-control form-control-sm" id="pasaporte">
        </div>
    </div>
    <div class="row">
        <div class="col-8">
            <label for="direccion-envio" class="form-label">Direccion envio de producto</label>
            <input type="text" class="form-control form-control-sm" id="direccion-envio" aria-describedby="codigo">
        </div>
        <div class="col-4" >
            <label for="sucursal" class="form-label">Posee sucursal?</label>
            <div class="form-check form-switch">
                <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckChecked" checked>
                <label class="form-check-label" for="flexSwitchCheckChecked">Posee Sucursal</label>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-4">
            <label for="categoria" class="form-label">Categoria contribuyente</label>
            <input type="text" class="form-control form-control-sm" id="categoria" aria-describedby="codigo">
        </div>
        <div class="col-2" >
            <label for="numero" class="form-label">Numero de sucursales</label>
            <input type="number" class="form-control form-control-sm" id="numero">
        </div>
        <div class="col-3" >
            <label for="movil" class="form-label">Movil</label>
            <input type="text" class="form-control form-control-sm" id="movil">
        </div>
        <div class="col-3" >
            <label for="fijo" class="form-label">Telefono fijo</label>
            <input type="text" class="form-control form-control-sm" id="fijo">
        </div>
    </div>
  </div>
</div> 
<div class="clearfix">&nbsp;</div>
<div class="card">
  <div class="card-header">
    Datos del representante o apoderado
  </div>
  <div class="card-body">
    <div class="row">
        <div class="col-6">
            <label for="nombre-representante" class="form-label">Nombre completo segun DUI</label>
            <input type="text" class="form-control form-control-sm" id="nombre-representante" aria-describedby="codigo">
        </div>
        <div class="col-6" >
            <label for="domicilio-representante" class="form-label">Domicilio</label>
            <input type="text" class="form-control form-control-sm" id="domicilio-representante">
        </div>
    </div>
    <div class="row">
        <div class="col-3">
            <label for="departamento-representante" class="form-label">Departamento</label>
            <input type="text" class="form-control form-control-sm" id="departamento-representante" aria-describedby="codigo">
        </div>
        <div class="col-3" >
            <label for="municipio-representante" class="form-label">Municipio</label>
            <input type="text" class="form-control form-control-sm" id="municipio-representante">
        </div>
        <div class="col-3" >
            <label for="pais-representante" class="form-label">Pais</label>
            <input type="text" class="form-control form-control-sm" id="pais-representante">
        </div>
        <div class="col-3" >
            <label for="estado-representante" class="form-label">Estado Civil</label>
            <input type="text" class="form-control form-control-sm" id="pais">
        </div>
    </div>
    <div class="row">
        <div class="col-3">
            <label for="dui" class="form-label">DUI</label>
            <input type="text" class="form-control form-control-sm" id="dui" aria-describedby="codigo">
        </div>
        <div class="col-3" >
            <label for="nit" class="form-label">NIT</label>
            <input type="text" class="form-control form-control-sm" id="nit">
        </div>
        <div class="col-3" >
            <label for="pasaporte" class="form-label">Pasaporte</label>
            <input type="text" class="form-control form-control-sm" id="pasaporte">
        </div>
        <div class="col-3" >
            <label for="email-representante" class="form-label">Email</label>
            <input type="mail" class="form-control form-control-sm" id="email-representante">
        </div>
    </div>
    
    <div class="row">
        <div class="col-4">
            <label for="otro-doc-r" class="form-label">Nombre de otro DOC</label>
            <input type="text" class="form-control form-control-sm" id="otro-doc-r" aria-describedby="codigo">
        </div>
        <div class="col-2" >
            <label for="numero-doc-r" class="form-label">Numero</label>
            <input type="text" class="form-control form-control-sm" id="numero-doc-r">
        </div>
        <div class="col-3" >
            <label for="movil-representante" class="form-label">Movil</label>
            <input type="text" class="form-control form-control-sm" id="movil-representante">
        </div>
        <div class="col-3" >
            <label for="fijo-representante" class="form-label">Telefono fijo</label>
            <input type="text" class="form-control form-control-sm" id="fijo-representante">
        </div>
    </div>
  </div>
</div> 
<div class="clearfix">&nbsp;</div>
<div class="card">
  <div class="card-header">
    Area de compras (encargado de compras, duenos del negocio o gerente de compras)
  </div>
  <div class="card-body">
    <div class="row">
        <div class="col-12">
            <label for="nombre-encargado" class="form-label">Nombre encargado</label>
            <input type="text" class="form-control form-control-sm" id="nombre-encargado" aria-describedby="codigo">
        </div>
    </div>
    <div class="row">
        <div class="col-4" >
            <label for="movil-encargado" class="form-label">Movil</label>
            <input type="text" class="form-control form-control-sm" id="movil-encargado">
        </div>
        <div class="col-4" >
            <label for="fijo-encargado" class="form-label">Telefono fijo</label>
            <input type="text" class="form-control form-control-sm" id="fijo-encargado">
        </div>
        <div class="col-4" >
            <label for="email-encargado" class="form-label">Email</label>
            <input type="text" class="form-control form-control-sm" id="email-encargado">
        </div>
    </div>
  </div>
</div>
<div class="clearfix">&nbsp;</div>
<div class="card">
  <div class="card-header">
    Identificacion de persona expuesta politicamente
  </div>
  <div class="card-body">
    <div class="row">
        <div class="col-9">
            <div class="row">
                <div class="col-8">
                    <label for="ans1" class="form-label">Es o ha sido funcionario publico en los ultimos 5 a&ntilde;os</label>
                </div>
                <div class="col-4">
                    <div class="form-check form-switch">
                        <input class="form-check-input" type="checkbox" role="switch" id="ans1" >
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-8">
                    <label for="ans2" class="form-label">Tiene usted un familiar que sea funcionario publico?</label>
                </div>
                <div class="col-4">
                    <div class="form-check form-switch">
                        <input class="form-check-input" type="checkbox" role="switch" id="ans2" >
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-8">
                    <label for="ans3" class="form-label">Tiene usted un asociado que sea o haya sido funcionario publico?</label>
                </div>
                <div class="col-4">
                    <div class="form-check form-switch">
                        <input class="form-check-input" type="checkbox" role="switch" id="ans3" >
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-8">
                    <label for="ans4" class="form-label">Tiene relacion comercial con algun funcionario publico de alto rango en los ultimos 5 a&ntilde;os</label>
                </div>
                <div class="col-4">
                    <div class="form-check form-switch">
                        <input class="form-check-input" type="checkbox" role="switch" id="ans4" >
                    </div>
                </div>
            </div>
        </div>
        <div class="col-3">
            <div class="badge bg-primary text-wrap" style="width: 6rem;">
                En caso que una de las respuestas sea positiva, completar "Formulario para PEP"
            </div>
        </div>
    </div>
    <div class="clearflix">&nbsp;</div>
    <div class="row">
        <div class="col-12">
            <p class="text-break">Funcionario público o "PEP", son las personas naturales que desempeñan o han desempeñado funciones públicas en nuestro país o en su país de origen, así como sus parientes en primer y segundo grado de
                consanguinidad o afinidad, compañeros de vida o asociados comerciales o de negoios. Se considerá "PEP" nacional hasta cinco años posterior al cese de su nombramiento. (NPR-08 Art. 3, Literal U).</p>
        </div>
    </div>
  </div>
</div>
<div class="clearfix">&nbsp;</div>
<div class="card">
  <div class="card-header">
    Identificacion general del negocio
  </div>
  <div class="card-body">
    <div class="row">
        <div class="col-12">
            <label for="procedencia-fondos" class="form-label">Procedencia de los fondos con los que realizan sus pagos:</label>
            <input type="text" class="form-control form-control-sm" id="procedencia-fondos" aria-describedby="codigo">
        </div>
    </div>
    <div class="row">
        <div class="col-4" >
            <label for="tipo-pago" class="form-label">Tipo de pago</label>
            <select id="tipo-pago" class="form-select form-select-sm" aria-label="Small select example">
                <option selected>Abrir opciones</option>
                <option value="1">Contado</option>
                <option value="2">Credito</option>
            </select>
        </div>
        <div class="col-2" >
            <label for="dias-credito" class="form-label">Dias credito</label>
            <input type="number" class="form-control form-control-sm" id="dias-credito">
        </div>
        <div class="col-3" >
            <label for="forma-pago" class="form-label">Forma de pago</label>
            <select id="forma-pago" class="form-select form-select-sm" aria-label="Small select example">
                <option selected>Abrir opciones</option>
                <option value="1">Efectivo</option>
                <option value="2">Transferencia</option>
                <option value="3">Cheque</option>
                <option value="3">Otro</option>
            </select>
        </div>
        <div class="col-3" >
            <label for="compra-estimada" class="form-label">Compra estimada por pedido</label>
            <input type="number" class="form-control form-control-sm" id="compra-estimada">
        </div>
    </div>
    <div class="row">
        <div class="col-6" >
            <label for="dias-llamar" class="form-label">Dias de llamar al cliente para programar pedido</label>
            <input type="text" class="form-control form-control-sm" id="dias-llamar">
        </div>
        <div class="col-3" >
            <label for="frecuencia" class="form-label">Frecuencia</label>
            <select id="frecuencia" class="form-select form-select-sm" aria-label="Small select example">
                <option selected>Abrir opciones</option>
                <option value="1">Semanal</option>
                <option value="2">Mensual</option>
                <option value="3">Cada dos meses</option>
                <option value="4">Trimestral</option>
                <option value="5">Dos veces al anio</option>
            </select>
        </div>
        <div class="col-3" >
            <label for="limite-credito" class="form-label">Limite credito solicitado</label>
            <input type="number" class="form-control form-control-sm" id="limite-credito">
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <p><strong>Promedio estimado de ingresos, Egresos, Activos y Pasivos</strong></p>
        </div>
    </div>
    <div class="row">
        <div class="col-3" >
            <label for="ingreso-mensual" class="form-label">Total ingresos Mensuales</label>
            <input type="text" class="form-control form-control-sm" id="ingreso-mensual">
        </div>
        <div class="col-3" >
            <label for="egresos-mensual" class="form-label">Total Egresos Mensuales</label>
            <input type="text" class="form-control form-control-sm" id="egreso-mensual">
        </div>
        <div class="col-3" >
            <label for="activo" class="form-label">Total Activos</label>
            <input type="text" class="form-control form-control-sm" id="activos">
        </div>
        <div class="col-3" >
            <label for="pasivos" class="form-label">Total Pasivos</label>
            <input type="text" class="form-control form-control-sm" id="pasivos">
        </div>
    </div>
  </div>
</div>
<br>
<button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>  
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>
    
    