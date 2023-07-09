import java.util.Random;

public class RandomNumberExample {
    public static void main(String[] args) {
        // Criando um objeto Random
        Random random = new Random();

        // Gerando um número aleatório entre 1 e 10
        int numeroAleatorio = random.nextInt(10) + 1;

        // Exibindo o número aleatório gerado
        System.out.println("O número aleatório é: " + numeroAleatorio);
    }
}
