const cantidadInv = document.querySelector('#Planta');
const cantidadPlanta = document.querySelector('#Hectarea');
const cantidadOtro = document.querySelector('#Otro');
const resultado = document.querySelector('#resultadoPlanta');
const resultadoHectarea = document.querySelector('#resultadoHectarea');
const resultadoOtro = document.querySelector('#resultadoOtro');
const productPrice = document.querySelector('#product_pricePlanta');
const productHectarea = document.querySelector('#product_priceHectarea');
const productOtro = document.querySelector('#product_priceOtro');
document.addEventListener('click', calculaMonto);
let total = document.createElement('p');
let totalInversion = document.createElement('p');

let montos = {
    montoPlanta: 0,
    montoHectarea: 0,
    montoOtro: 0
};

function calculaMonto(e) {
    let selected = e.target.parentNode;
    if (selected === null) {
        return;
    }

    selected = selected.firstChild;
    if (selected.id === 'Planta') {
        borrarPreciosPlanta();
        let totalPlanta = document.createElement('p');
        let precio = productPrice.innerHTML;
        precio = parseFloat(precio.substr(2));
        let monto = selected.value * precio;
        montos.montoPlanta = monto;
        getTotalInversion();
        getCO2(selected.value, 'Planta');
        if (monto === 0) {
            borrarPreciosPlanta();
            return;
        }
        totalPlanta.innerHTML = `El monto de la inversión por planta es de $${monto}.00.
        Y se eliminan ${selected.value * 760}Kg de CO2`;
        resultado.appendChild(totalPlanta);
    }
    if (selected.id === 'Hectarea') {
        borrarPreciosHectarea();
        let totalHectarea = document.createElement('p');
        let precio = productHectarea.innerHTML;
        precio = parseFloat(precio.substr(2));
        console.log(precio);
        let monto = selected.value * precio;
        montos.montoHectarea = monto;
        getTotalInversion();
        getCO2(selected.value, 'Hectarea');
        if (monto === 0) {
            borrarPreciosHectarea();
            return;
        }
        totalHectarea.innerHTML = `El monto de la inversión por hectarea es de $${monto}.00
        Se contibuye con ${selected.value * 50} hectareas menos de deforestación
        `;
        resultadoHectarea.appendChild(totalHectarea);
    }
    if (selected.id === 'Otro') {
        borrarPreciosOtro();
        let totalOtro = document.createElement('p');
        let precio = productOtro.innerHTML;
        precio = parseFloat(precio.substr(2));
        console.log(precio);
        let monto = selected.value * precio;
        montos.montoOtro = monto;
        getTotalInversion();
        if (monto === 0) {
            borrarPreciosOtro();
            return;
        }
        totalOtro.innerHTML = `El monto de la inversión por otros es de $${monto}.00`;
        resultadoOtro.appendChild(totalOtro);
    }
}

function getTotalInversion() {
    let montoTotal = 0;
    for (const monto in montos) {
        // console.log(montos[monto]);
        montoTotal += montos[monto];
    }
    totalInversion.textContent = `El monto total de la inversión es: $${montoTotal}`;
    let texto = document.querySelector('#textoInvertir');
    texto.appendChild(totalInversion);
}

function getCO2(cant, tipo) {
    if (tipo === 'Planta') {
        console.log(`Se eliminan ${cant * 760}Kg de CO2`);
    } else {
        console.log(`Se contibuye con ${cant * 50} hectareas menos de deforestación`);
    }
}

function borrarPreciosPlanta() {
    while (resultado.firstChild) {
        resultado.removeChild(resultado.firstChild);
    }
}

function borrarPreciosHectarea() {
    while (resultadoHectarea.firstChild) {
        resultadoHectarea.removeChild(resultadoHectarea.firstChild);
    }
}

function borrarPreciosOtro() {
    while (resultadoOtro.firstChild) {
        resultadoOtro.removeChild(resultadoOtro.firstChild);
    }
}

document.addEventListener('DOMContentLoaded', calculaMonto);