# ProyectoIV-ENLAZADOS

##Integrantes del grupo:

Javier García Martínez

Andrés Serrano Gómez

Manuel Gutiérrez Delgado

##Descripción

Esta práctica consiste en realizar el diseño de una serie de máquinas virtuales que serán usadas para desarrollar una aplicación solicitada que cumpla una necesidad real. En este caso, será la realización de una aplicación web en la cual se podrán localizar todo tipo de enlaces. Lo que pretendemos con esta aplicación es que los usuarios puedan encontrar enlaces de casi cualquier página en nuestra web, ya que realizaremos una perfecta organización por secciones como puede ser "Periodismo, Redes Sociales, Viajes, Cine, Correo, etc...". Esto se trataría de la parte informativa de la aplicación web, pero lo más interesante de todo esto, es que los usuarios que se registren en nuestra aplicación, podrán añadir sus propios enlaces a la web, de manera que estos sean visibles para el resto de usuarios y así darse a conocer un poco en el mundo de Internet. De momento, todo este servicio proporcionado para añadir enlaces, será totalmente gratuito. Los usuarios tan solo tendrán que registrarse y añadir sus enlaces. Además, los usuarios dispondrán de un panel de control donde podrán comprobar todos los enlaces que ellos hayan añadido y su perfil de usuario. Por otro lado, los enlaces tendrán que ser admitidos por el propio administrador, el cual, a través de su panel de control, hará una verificación del enlace proporcionado antes de ser añadido a la web.

También, para añadir un enlace propio a la web, crearemos un __Buscador de Dominios__, cuyo enlace podrá ser localizado como un servicio que proporcionaremos nosotros mismos.

Esta aplicación será desarrollada en Python, usando el entorno de desarrollo web Django y para la parte visual, un framework CSS como Bootstrap.

Se va a usar una metodología ágil para el desarrollo de la aplicación, pero también para el despliegue de la misma, con el objetivo de que ambos procesos se puedan llevar a cabo de la manera más rápida posible.

El motivo de usar varias máquinas virtuales es que en un entorno real nunca se debería llevar a cabo todo el desarrollo en una misma máquina por los diversos problemas que esto puede ocasionar, y aunque éste es un proyecto pequeño, deberá contar mínimo con servidores de prueba y servidor de producción.

##Herramientas que se usarán

- Bootstrap, es un framework CSS desarrollado inicialmente (en el año 2011) por Twitter que permite dar forma a un sitio web mediante librerías CSS que incluyen tipografías, botones, cuadros, menús y otros elementos que pueden ser utilizados en cualquier sitio web.
Aunque el desarrollo del framework Bootstrap fue iniciado por Twitter, fue liberado bajo licencia MIT en el año 2011 y su desarrollo continua en un repositorio de GitHub. Bootstrap es una excelente herramienta para crear interfaces de usuario limpias y totalmente adaptables a todo tipo de dispositivos y pantallas, sea cual sea su tamaño. Además, Bootstrap ofrece las herramientas necesarias para crear cualquier tipo de sitio web utilizando los estilos y elementos de sus librerías.

- Django, es un framework de desarrollo web de código abierto, escrito en Python, que respeta el patrón de diseño conocido como Modelo–vista–controlador.

- Python, para la creación de la aplicación web.

- HTML5 y CSS3 para crear la interfaz de la aplicación.

- PHP para programar la parte del servidor y el buscador de dominios.

- MySQL, para bases de datos de usuarios y enlaces.

- Despliegue en Azure.

##Reparto del trabajo

De la aplicación se encargará @javiergama8, el buscador de dominio lo realizarán @aserranogomez y @manolotello7 y para el despliegue automático, testeo, configuración, integración continua, etc.., participaremos los 3 colaboradores, ya que es la parte más importante de la asignatura de Infraestructura Virtual.

###Licencia

La licencia bajo la que publicamos esta aplicación es GNU GPL v3, esto da permiso a cualquier persona u organización para realizar modificaciones sobre la misma, además de poder realizar copias y distribuir tanto la versión original como la modificada, pudiendo cobrar o no por ello, pero siempre permaneciendo el mismo como software libre.
