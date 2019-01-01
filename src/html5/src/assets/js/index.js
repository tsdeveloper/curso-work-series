import '../sass/dist/boot.sass';
import '../sass/multitenant/style.tenant.sass';

import {
    hello,
    sup
} from './module';


hello();
sup();

console.log('Webpack watching work..');