# Documentación del Servicio `DateService`

## Descripción General
El `DateService` es un servicio en Angular encargado de realizar una solicitud HTTP a la API de GitHub y obtener el encabezado de fecha (`Date`) de la respuesta. Este encabezado contiene la fecha y hora en que se generó la respuesta del servidor, y se puede utilizar en el componente para diversas finalidades, como sincronización de tiempo o validación de caducidad.

## Importaciones
- **`@angular/core`**: Se utiliza para la decoración `@Injectable`, que define la clase como un servicio que puede ser inyectado en otros componentes o servicios de Angular.
- **`@angular/common/http`**: Proporciona el `HttpClient` y `HttpResponse` para manejar solicitudes HTTP y respuestas respectivamente.
- **`rxjs`**: Se utiliza para manejar la asincronía a través de observables.

## Decorador `@Injectable`
```typescript
@Injectable({
  providedIn: 'root'
})
```

Este decorador indica que el servicio se proporciona en el nivel de raíz de la aplicación, lo que significa que una única instancia del servicio estará disponible en toda la aplicación.

## Propiedades
- **`url`**: Una propiedad privada que almacena la URL base de la API de Pruebas SGA Administración (**`https://pruebassgaadministracion.portaloas.udistrital.edu.co/main.js`**), tomando como referncia está URL.

## Constructor
```typescript
constructor(private http: HttpClient) { }
```
El constructor recibe una instancia del HttpClient para poder realizar solicitudes HTTP. Angular inyecta automáticamente este cliente cuando el servicio se inicializa.

## Métodos
`getDateHeader()`
```typescript
getDateHeader(): Observable<string>
```
Este método realiza una solicitud **`GET`** a la URL especificada (**`https://api.github.com/`**) y devuelve un **`Observable<string>`** que emite el valor del encabezado **`Date`** de la respuesta.

## Flujo del Método:
1- **Creación del Observable:** Se crea un nuevo **`Observable`** que maneja manualmente el flujo de los datos.

2- **Solicitud HTTP:** Se realiza una solicitud **`GET`** a la API de GitHub utilizando el método **`http.get`**, observando toda la respuesta (**`{ observe: 'response' }`**).

3- **Manejo de la Respuesta:**
- Se verifica si el encabezado **`Date`** está presente en la respuesta.
- Si está presente, se emite el valor del encabezado a través del **`observer.next(dateHeader)`**.
- Si no está presente, se emite un error **`observer.error('Date header not found')`**.

4- **Manejo de Errores:** Cualquier error que ocurra durante la solicitud se maneja emitiendo un error a través del **`observer.error(error)`**.

## Ejemplo de Uso
En un componente Angular, podrías usar este servicio de la siguiente manera:

```typescript
import { Component, OnInit } from '@angular/core';
import { DateService } from './date.service';

@Component({
  selector: 'app-prueba',
  templateUrl: './prueba.component.html',
})
export class PruebaComponent implements OnInit {
  dateHeader: string | null = null;

  constructor(private dateService: DateService) {}

  ngOnInit(): void {
    this.dateService.getDateHeader().subscribe(
      date => this.dateHeader = date,
      error => console.error('Error fetching date header:', error)
    );
  }
}

```
En este ejemplo, el **`PruebaComponent`** utiliza el **`DateService`** para obtener el encabezado de fecha y almacenarlo en una propiedad local llamada **`dateHeader`**. Si hay un error, se maneja en la consola del navegador.

