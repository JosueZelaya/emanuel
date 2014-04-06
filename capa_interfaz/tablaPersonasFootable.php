<div class="panel panel-default col-sm-11">
     <!--Personas que visitan la iglesia--> 
    <div class="panel-heading" style="background: white">
    
        <div class="input-group col-sm-4">
          <input type="text" class="form-control" placeholder="Buscar" id="buscar_usuario" name="buscar_usuario">
          <div class="input-group-btn">
            <button class="btn btn-default" type="submit"><span class="glyphicon glyphicon-search"></span></button>
          </div>          
        </div>
        <br/>
        
    </div>
        
        <!--<div class="table-responsive">-->
        <div class="">
            <div id="example2_wrapper" class="dataTables_wrapper form-inline" role="grid">                
                <table class="table table-bordered table-condensed table-striped table-hover ">
                <thead>
                    <tr>
                        <th data-toggle="true" class="text-center footable-first-column">Nombres</th>
                        <th class="text-center">Apellidos</th>
                        <th data-hide="tiny,phone,medium,tablet" class="text-center">DUI</th>
                        <th data-hide="tiny,phone,medium,tablet" class="text-center">Correo</th>
                        <th data-hide="tiny" class="text-center">Telefono</th>
                        <th data-hide="tiny,phone,medium,tablet" class="text-center">Dirección</th>
                        <th data-hide="tiny,phone,medium" class="text-center footable-last-column">Cumpleaños</th>
                    </tr>
                </thead>
                <!--<tbody id ="mostrarUsuarios" class="mostrarUsuarios" role="alert" aria-live="polite" aria-relevant="all">-->
                <tbody id="mostrarUsuarios" class="mostrarUsuarios">

                    <?php

                        $personas = ManejadorPersonal::getTodasPersonas();

                        for ($index = 0; $index < count($personas); $index++) {
                            echo "<tr>".
                                 "<td class='footable-first-column'><span class='footable-toogle'></span>".$personas[$index]->getNombres()."</td>".   
                                 "<td>".$personas[$index]->getApellidos()."</td>".
                                 "<td>".$personas[$index]->getDUI()."</td>".
                                 "<td>".$personas[$index]->getCorreo()."</td>".
                                 "<td>".$personas[$index]->getTelefono()."</td>".
                                 "<td>".$personas[$index]->getDireccion()."</td>".
                                 "<td class='footable-last-column'>".$personas[$index]->getFechaNacimiento()."</td>".   
                                 "</tr>";
                        }
                   ?>
                </tbody>                
            </table>
            

            </div>
        </div>        
    </div>


<!--<table class="table demo table-bordered" data-filter="#filter" data-page-size="5" data-page-previous-text="prev" data-page-next-text="next">
					<thead>
						<tr>
							<th data-toggle="true">
								First Name
							</th>
							<th>
								Last Name
							</th>
							<th data-hide="phone,tablet">
								Job Title
							</th>
							<th data-hide="phone,tablet">
								DOB
							</th>
							<th data-hide="phone">
								Status
							</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td>Isidra</td>
							<td><a href="#">Boudreaux</a></td>
							<td>Traffic Court Referee</td>
							<td data-value="78025368997">22 Jun 1972</td>
							<td data-value="1"><span class="status-metro status-active" title="Active">Active</span></td>
						</tr>
						<tr>
							<td>Shona</td>
							<td>Woldt</td>
							<td><a href="#">Airline Transport Pilot</a></td>
							<td data-value="370961043292">3 Oct 1981</td>
							<td data-value="2"><span class="status-metro status-disabled" title="Disabled">Disabled</span></td>
						</tr>
						<tr>
							<td>Granville</td>
							<td>Leonardo</td>
							<td>Business Services Sales Representative</td>
							<td data-value="-22133780420">19 Apr 1969</td>
							<td data-value="3"><span class="status-metro status-suspended" title="Suspended">Suspended</span></td>
						</tr>
						<tr>
							<td>Easer</td>
							<td>Dragoo</td>
							<td>Drywall Stripper</td>
							<td data-value="250833505574">13 Dec 1977</td>
							<td data-value="1"><span class="status-metro status-active" title="Active">Active</span></td>
						</tr>
						<tr>
							<td>Maple</td>
							<td>Halladay</td>
							<td>Aviation Tactical Readiness Officer</td>
							<td data-value="694116650726">30 Dec 1991</td>
							<td data-value="3"><span class="status-metro status-suspended" title="Suspended">Suspended</span></td>
						</tr>
						<tr>
							<td>Maxine</td>
							<td><a href="#">Woldt</a></td>
							<td><a href="#">Business Services Sales Representative</a></td>
							<td data-value="561440464855">17 Oct 1987</td>
							<td data-value="2"><span class="status-metro status-disabled" title="Disabled">Disabled</span></td>
						</tr>
						<tr>
							<td>Lorraine</td>
							<td>Mcgaughy</td>
							<td>Hemodialysis Technician</td>
							<td data-value="437400551390">11 Nov 1983</td>
							<td data-value="2"><span class="status-metro status-disabled" title="Disabled">Disabled</span></td>
						</tr>
						<tr>
							<td>Lizzee</td>
							<td><a href="#">Goodlow</a></td>
							<td>Technical Services Librarian</td>
							<td data-value="-257733999319">1 Nov 1961</td>
							<td data-value="3"><span class="status-metro status-suspended" title="Suspended">Suspended</span></td>
						</tr>
						<tr>
							<td>Judi</td>
							<td>Badgett</td>
							<td>Electrical Lineworker</td>
							<td data-value="362134712000">23 Jun 1981</td>
							<td data-value="1"><span class="status-metro status-active" title="Active">Active</span></td>
						</tr>
						<tr>
							<td>Lauri</td>
							<td>Hyland</td>
							<td>Blackjack Supervisor</td>
							<td data-value="500874333932">15 Nov 1985</td>
							<td data-value="3"><span class="status-metro status-suspended" title="Suspended">Suspended</span></td>
						</tr>
					</tbody>
				</table>-->


<script src="js/jquery-ui/jquery-1.10.2.js"></script>
<script src="js/funciones.js"></script>
<!--<script type="text/javascript">
    $(function () {
        $('table').footable({
            breakpoints: {
                tiny: 180,                
                phone: 256,
                medium: 512,
                tablet: 768,                
            }
        });
    });
</script>-->

