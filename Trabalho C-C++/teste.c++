#include <iostream>
#include <string>
#include <cstdlib>
#include <ctime>
#include <locale>
#include <wchar.h>
#include <limits>

using namespace std;

int main()
{
    const wstring PALAVRAS[5] = {L"PROGRAMAÇÃO", L"ALGORITMO", L"DESENVOLVIMENTO", L"DADOS", L"INTERFACE"};
    const int CHANCES_MAX = 6;
    int erros = 0;
    bool acertou = false;

    // Configura a localização para o idioma português
    setlocale(LC_ALL, "pt_BR.UTF-8");

    // Inicializa o gerador de números aleatórios
    srand(time(nullptr));

    // Escolha aleatória da palavra
    int indice = rand() % 5;
    wstring palavra_secreta = PALAVRAS[indice];
    wstring palavra_status(palavra_secreta.size(), L'-');

    // Loop principal do jogo
    while (erros < CHANCES_MAX && !acertou)
    {
        // Mostra o status atual da palavra
        wcout << L"Palavra: " << palavra_status << endl;

        // Lê um caractere do usuário
        wchar_t letra;
        wcout << L"Digite uma letra: ";
        wcin >> letra;

        // Verifica se o usuário digitou uma letra ou mais de uma
        if (!iswalpha(letra) && letra != L'_' && letra != L' ')
        {
            wcin.clear();
            wcin.ignore(numeric_limits<streamsize>::max(), L'\n');
            wcout << L"Por favor, digite uma letra por vez." << endl;
            continue;
        }

        // Converte a letra para minúscula sem acento
        letra = towlower(letra);

        // Verifica se a letra já foi utilizada
        if (palavra_status.find(letra) != wstring::npos || letra == L' ' || letra == L'_')
        {
            wcout << L"Você já utilizou essa letra. Tente outra." << endl;
            continue;
        }

        // Verifica se a letra está na palavra
        bool encontrou = false;
        for (int i = 0; i < palavra_secreta.size(); i++)
        {
            if (towlower(palavra_secreta[i]) == letra || palavra_secreta[i] == '_' || palavra_secreta[i] == ' ')
            {
                encontrou = true;
                palavra_status[i] = palavra_secreta[i];
            }
        }

        // Verifica se o usuário acertou ou errou
        if (encontrou)
        {
            wcout << L"Letra encontrada!" << endl;
        }
        else
        {
            wcout << L"Letra não encontrada. Você perdeu uma chance." << endl;
            erros++;

            // Mostra o boneco da forca correspondente ao número de erros
            switch (erros)
            {
                case 1:
                    wcout << L"    ____" << endl;
                    wcout << L"   |    |" << endl;
                    wcout << L"   |    O" << endl;
                    wcout << L"   |" << endl;
                    wcout << L"   |" << endl;
                    wcout << L"___|___" << endl;
                    break;
                case 5:
                    wcout << L"    ____" << endl;
                    wcout << L"   |    |" << endl;
                    wcout << L"   |    O" << endl;
                    wcout << L"   |   /|\\" << endl;
                    wcout << L"   |   / \\" << endl;
                    wcout << L"___|___" << endl;
                    break;
            }
        }

        // Verifica se o usuário acertou todas as letras
        if (palavra_status == palavra_secreta)
        {
            acertou = true;
        }
    }

    // Verifica se o usuário venceu ou perdeu
    if (acertou)
    {
        wcout << L"Parabéns, você venceu! A palavra era: " << palavra_secreta << endl;
    }
    else
    {
        wcout << L"Que pena, você perdeu. A palavra era: " << palavra_secreta << endl;
    }

    return 0;
}
