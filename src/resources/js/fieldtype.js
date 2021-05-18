import Fieldtype from './components/separator';

Statamic.booting(() => {
    Statamic.$components.register('seperator-fieldtype', Fieldtype);
});
