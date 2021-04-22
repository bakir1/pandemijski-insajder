import store from '../store';
import axios from 'axios';

export function http(){
    return axios.create({
        baseURL: 'http://localhost:8000'
    });
}

export function httpFile(){
    return axios.create({
        baseURL: store.state.apiURL,
        headers: {
            'Content-Type': 'multipart/form-data'
        }
    });
}