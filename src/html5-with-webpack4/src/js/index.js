const CONDICAO_FUNCIONARIO = true;
const CONDICAO_ADMINISTRADOR = true;

if (CONDICAO_FUNCIONARIO) {
    import(
        /* webpackChunkName: "funcionario" */
        './funcionario'
    ).then(funcionario => {
        funcionario.default();
    });
}

if (CONDICAO_ADMINISTRADOR) {
    import(
        /* webpackChunkName: "administrador" */
        './administrador'
    ).then(administrador => {
        administrador.default();
    });
}

import 'airbnb-browser-shims';
import '../sass/main.sass';


if (process.env.NODE_ENV !== 'production') {
    console.log('Looks like we are in development mode!');
}