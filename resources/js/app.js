import Alpine from "alpinejs";
import "./bootstrap";

window.Alpine = Alpine;

Alpine.store("sidebar", {
    open: false,
});

Alpine.start();
