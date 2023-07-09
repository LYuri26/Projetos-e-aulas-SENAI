package javafxexemplo;

import javafx.application.Application;
import javafx.scene.Scene;
import javafx.scene.control.Button;
import javafx.scene.control.Label;
import javafx.scene.layout.VBox;
import javafx.stage.Stage;

public class javaexemplo extends Application {

    @Override
    public void start(Stage primaryStage) {
        primaryStage.setTitle("Exemplo JavaFX");

        Label label = new Label("Olá, mundo!");

        Button button = new Button("Clique aqui!");
        button.setOnAction(e -> label.setText("Botão clicado!"));

        VBox vbox = new VBox(10);
        vbox.getChildren().addAll(label, button);
        vbox.setPrefSize(200, 100);
        vbox.setSpacing(10);

        Scene scene = new Scene(vbox);

        primaryStage.setScene(scene);
        primaryStage.show();
    }

    public static void main(String[] args) {
        launch(args);
    }
}
