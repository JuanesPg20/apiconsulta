<p align="center">API CONSULTA</a></p>

## Acerca de esta API

Esta API sirve para realizar consultas dependiendo el tipo de permisos que tenga para ver el formulario, este sistema se utiliza en los call centers cuando un usuario hace el proceso por medio de un IVR, ya que el usuario desde el menu de macacion y dependiendo el cliente que se ejecutando una campaña permmite abrir el formulario indicado. 

Esta API contiene los siguientes endpoint:

- /api/v1/getfrom.

Este endpoint le permite al IVR llamar el formulario que corresponde al cliente, valida los derechos de ver dicho formulario y determina por memdio de una autorizacion basica si el cliente esta activo ya que esta cuenta se puede eliminar.

## Acerca de este proyecto

Este proyecto es un proyecto base y a partir de este proyecto se pueden realizar muchas adiciones, este en concreto tiene base de datos SQLITE, tiene unos seeders para ingresar datos de prueba, contiene un controlador que lleva la logica de negocio.

## Coleccion Postman

En el siguientre enlace puede ver la documentacion de como consumir esta API [APICONSULTA](https://documenter.getpostman.com/view/25207190/2sAXqy4Kti).


## Licencia

Prohibido las replicas sin autorizacion, si desea utilizar una copia escribir al siguiente correo: pescadorgutierrezj@gmail.com. 
