#include <stdio.h>
#include <string.h>
#include <stdbool.h>
#include <stdlib.h>

#define MAX_SIZE 100

int TOP = -1;
int TOP_U = -1;
char STACK[MAX_SIZE];
char STACK_U[MAX_SIZE];

bool isFull() {
    if (TOP >= MAX_SIZE - 1) {
        return true;
    } else {
        return false;
    }
}

bool isFull_U() {
    if (TOP_U >= MAX_SIZE - 1) {
        return true;
    } else {
        return false;
    }
}

bool isEmpty() {
    if (TOP == -1) {
        return true;
    } else {
        return false;
    }
}

bool isEmpty_U() {
    if (TOP_U == -1) {
        return true;
    } else {
        return false;
    }
}

void Push(char value) {
    if (isFull()) {
        printf("The stack is full\n");
    } else {
        TOP = TOP + 1;
        STACK[TOP] = value;
    }
}

void Push_U(char value) {
    if (isFull_U()) {
        printf("The stack is full\n");
    } else {
        TOP_U = TOP_U + 1;
        STACK_U[TOP_U] = value;
    }
}

char Pop() {
    if (isEmpty()) {

        return '\0';
    } else {
        char values = STACK[TOP];
        TOP--;
        return values;
    }
}

char Pop_U() {
    if (isEmpty_U()) {

        return '\0';
    } else {
        char values = STACK_U[TOP_U];
        TOP_U--;
        return values;
    }
}

int main() {
    int m;
    char k;
    char l;
    char array[MAX_SIZE];
    printf("Enter the number of sequences: ");
    scanf("%d", &m);
    while (getchar() != '\n');

    for (int i = 0; i < m; i++) {
        printf("Enter the sequence: ");
        fgets(array, sizeof(array), stdin);

        int n = strlen(array) - 1;

        for (int t = 0; t < n; t++) {
            if (array[t] == '<') {
                if (t > 0 && array[t - 1] == '^') {
                    k = Pop_U();
                    Push(k);
                } else {
                    k = Pop();
                    Push_U(k);
                }
            } else if (array[t] == '^') {
                if (t > 0 && array[t - 1] == '<') {
                    l = Pop_U();
                    Push(l);
                } else {
                    Pop();
                }
            } else {
                Push(array[t]);
            }
        }
    }

    printf("Final contents of STACK: ");
    for (int g = 0; g <= TOP; g++) {
        printf("%c", STACK[g]);
    }
    printf("\n");

    return 0;
}





