function init()
{
   var url='http://localhost/proyectoV1.0/public/apiclientes';
   var urlF='http://localhost/proyectoV1.0/public/Folio';

   new Vue
   ({
                  http:
                  {
                    headers:{
                      'X-CSRF-TOKEN':document.querySelector('#token').getAttribute('value')
                  }
                  },
                  el:'#apicliente',

                   created:function()
                   {
                      this.getClientes();
                      this.getFolios();
                   },

                  data:
                  {
                    prueba:'hola mundo',
                    clientes:[],
                    folio:'',
                    nombre:'',
                    apellidop:'',
                    apellidom:'',
                    numero_tel:'',
                    correo:'',
                    pais:'',
                    estado:'',
                    localidad:'',
                    comentario:'',
                    editando:false,
                    auxFolio:'',
                    ofolios:''
                   },

                  methods:
              {
                    getClientes:function()
                    {

                      this.$http.get(url).then
                      (function(response){
                        console.log(response);
                        this.clientes=response.data;
                      });
                    },
                    // método para obtener el folio del cliente
                     getFolios:function()
                     {
                        this.$http.get(urlF).then
                        (function(response){
                          console.log(response);
                          this.ofolios=response.data;
                        });
                      },

                   showModal:function() 
                   {
                    $('#add_clientes').modal('show');
                    this.getFolios(); //llamando el método para mostrar el folio del cliente
                    
                   },
                      

                   agregarCliente:function()
                     {
                      // Construyendo un objeto json para enviar a la api
                      var cliente={
                                   folio:this.folio,
                                   nombre:this.nombre.trim().toUpperCase(),
                                   apellidop:this.apellidop.trim().toUpperCase(),
                                   apellidom:this.apellidom.trim().toUpperCase(),
                                   numero_tel:this.numero_tel,
                                   correo:this.correo,
                                   pais:this.pais.trim().toUpperCase(),
                                   estado:this.estado.trim().toUpperCase(),
                                   localidad:this.localidad.trim().toUpperCase(),
                                   comentario:this.comentario.trim().toUpperCase()
                                 }; 

                                  //vaciando las variables
                                   this.folio='';
                                   this.nombre='';
                                   this.apellidop='';
                                   this.apellidom='';
                                   this.numero_tel='';
                                   this.correo='';
                                   this.pais='';
                                   this.estado='';
                                   this.localidad='';
                                   this.comentario='';
                                   this.ofolios='';//reiniciando la variable de folios,  y las demás variables

                                   console.log(cliente);
                                  // Se envia el objeto a la api mediante un post
                                   this.$http.post(url,cliente).then
                                   (function(response){
                                       this.getClientes();
                                       $('#add_clientes').modal('hide');
                                   }
                                   )

                        
                     
                      },

                    eliminarCliente:function(id)
                    {
                      // alert(id);
                      var confirmar = confirm("¿Está seguro que desea eliminar éste cliente?")

                       if (confirmar){
                        this.$http.delete(url + '/' + id).then
                        (function(response)
                         {
                            this.getClientes()  
                        });

                        }
                    },

                    editCliente:function(id)
                    {
                      // alert(id);
                      // Indica que estamos en modo edición
                      this.editando=true;
                      // Carga la ventana modal para la edición
                      $('#add_clientes').modal('show');

                      // Petición al servidor
                      this.$http.get(url + '/' + id).then
                      (function(response){

                        console.log(response);

                        // Transportamos los datos
                          this.folio=response.data.folio;
                          this.nombre=response.data.nombre;
                          this.apellidop=response.data.apellidop;
                          this.apellidom=response.data.apellidom;
                          this.numero_tel=response.data.numero_tel;
                          this.correo=response.data.correo;
                          this.pais=response.data.pais;
                          this.estado=response.data.estado;
                          this.localidad=response.data.localidad;
                          this.comentario=response.data.comentario;

                          this.auxFolio = response.data.folio;



                       });
                    }, 

                    updateCliente:function(id)
                    {
                       // alert(id);

                    // Construyendo un objeto json para enviar a la api
                               var clientedos=
                                {
                                 folio:this.folio,
                                 nombre:this.nombre,
                                 apellidop:this.apellidop,
                                 apellidom:this.apellidom,
                                 numero_tel:this.numero_tel,
                                 correo:this.correo,
                                 pais:this.pais,
                                 estado:this.estado,
                                 localidad:this.localidad,
                                 comentario:this.comentario};

                                 console.log(clientedos);
                                 this.$http.patch(url + '/' + id,clientedos).then
                                 (function(response){
                                    console.log(response);
                                    this.getClientes();
                                    this.editando=false;
                                    
                                    $('#add_clientes').modal('hide');
                                    
                                    // $('#add_clientes').modal('hide');
                                 });
                      }
             }
   });

 }
   
window.onload=init;