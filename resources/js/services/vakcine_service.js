import {http, httpFile} from './http_service';

export function createVakcine(data){
    return httpFile().post('api/vakcine');
}

