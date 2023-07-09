module javafxexemplo {
    requires javafx.controls;
    requires javafx.fxml;

    opens javafxexemplo to javafx.fxml;
    exports javafxexemplo;
}
