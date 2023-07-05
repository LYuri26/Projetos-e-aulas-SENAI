#include <stdio.h>
#include <stdlib.h>
#include <time.h>
#include <wchar.h>
#include <locale.h>
#include <wctype.h>

#define MAX_PALAVRAS 5
#define MAX_LETRAS 20
#define CHANCES_MAX 6

int main()
{
    setlocale(LC_ALL, "pt_BR.UTF-8");

    const wchar_t PALAVRAS[MAX_PALAVRAS][MAX_LETRAS] = {L"PROGRAMAÇÃO", L"ALGORITMO", L"DESENVOLVIMENTO", L"BANCO_DE_DADOS", L"INTERFACE"};
    int erros = 0;
    int acertou = 0;

    srand(time(NULL));

    int indice = rand() % MAX_PALAVRAS;
    const wchar_t *palavra_secreta = PALAVRAS[indice];
    wchar_t palavra_status[MAX_LETRAS + 1];

    size_t palavra_tamanho = wcslen(palavra_secreta);
    for (size_t i = 0; i < palavra_tamanho; i++)
    {
        palavra_status[i] = L'-';
    }
    palavra_status[palavra_tamanho] = L'\0';

    while (erros < CHANCES_MAX && !acertou)
    {
        wprintf(L"Palavra: %ls\n", palavra_status);

        wchar_t letra;
        wprintf(L"Digite uma letra: ");
        wscanf(L" %lc", &letra);
        letra = towlower(letra);

        if (!iswalpha(letra) && letra != L'_' && letra != L' ')
        {
            wprintf(L"Por favor, digite uma letra por vez.\n");
            continue;
        }

        int encontrou = 0;
        for (size_t i = 0; i < palavra_tamanho; i++)
        {
            if (towlower(palavra_secreta[i]) == letra || palavra_secreta[i] == '_' || palavra_secreta[i] == ' ')
            {
                encontrou = 1;
                palavra_status[i] = palavra_secreta[i];
            }
        }

        if (encontrou)
        {
            wprintf(L"Letra encontrada!\n");
        }
        else
        {
            wprintf(L"Letra não encontrada. Você perdeu uma chance.\n");
            erros++;

            switch (erros)
            {
            case 1:
                wprintf(L"    ____\n");
                wprintf(L"   |    |\n");
                wprintf(L"   |    O\n");
                wprintf(L"   |\n");
                wprintf(L"   |\n");
                wprintf(L"___|___\n");
                break;
            case 5:
                wprintf(L"    ____\n");
                wprintf(L"   |    |\n");
                wprintf(L"   |    O\n");
                wprintf(L"   |   /|\\ \n");
                wprintf(L"   |   / \\\n");
                wprintf(L"___|___\n");
                break;
            }
        }

        int palavra_completa = 1;
        for (size_t i = 0; i < palavra_tamanho; i++)
        {
            if (palavra_status[i] == L'-')
            {
                palavra_completa = 0;
                break;
            }
        }

        if (palavra_completa)
        {
            acertou = 1;
        }
    }

    if (acertou)
    {
        wprintf(L"Parabéns, você venceu! A palavra era: %ls\n", palavra_secreta);
    }
    else
    {
        wprintf(L"Que pena, você perdeu. A palavra era: %ls\n", palavra_secreta);
    }

    return 0;
}
