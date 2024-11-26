import './bootstrap';

import Alpine from 'alpinejs'
import Intersect from '@alpinejs/intersect'

Alpine.plugin(Intersect)
Alpine.start()

window.Alpine = Alpine


export function closeModal() {
  document.querySelector('#modalNuevoEmpleado').classList.add('hidden');
}
