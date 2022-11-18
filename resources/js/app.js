import "./bootstrap";

import Alpine from "alpinejs";

window.Alpine = Alpine;

Alpine.start();

import MicroModal from "micromodal";
MicroModal.init({
    disableScroll: true,
});
