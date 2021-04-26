// This file can be replaced during build by using the `fileReplacements` array.
// `ng build --prod` replaces `environment.ts` with `environment.prod.ts`.
// The list of file replacements can be found in `angular.json`.

export const environment = {
  production: false,

  // baseUrl: 'http://fopeogundero.com/fobtm/backend/public/api/',
  // imageUrl : 'http://fopeogundero.com/fobtm/backend/public/upload',
  // login: 'http://fopeogundero.com/fobtm/backend/public/api/login',
  // signup: 'http://fopeogundero.com/fobtm/backend/public/api/signup'


  baseUrl : 'http://localhost:8600/api/',
  imageUrl : 'http://localhost:8600/upload',
  login: 'http://localhost:8600/api/login',
  signup: 'http://localhost:8600/api/signup',
};

/*
 * For easier debugging in development mode, you can import the following file
 * to ignore zone related error stack frames such as `zone.run`, `zoneDelegate.invokeTask`.
 *
 * This import should be commented out in production mode because it will have a negative impact
 * on performance if an error is thrown.
 */
// import 'zone.js/dist/zone-error';  // Included with Angular CLI.
