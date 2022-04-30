#include<stdio.h>
#include<malloc.h>

void main(){
    int i,n;
    int *a;

    printf("|n Number of elemant to be entered:-");
    scanf("%d",&n);
    a=(int*)calloc(n,sizeof(int));
    printf("Enter %d number:\n",n);
    for(i=0;i<n;i++){
        scanf("%d",&a[i]);
    }
    printf("The nunmber enterd are :\n");
    for(i=0;i<n;i++){
        printf("\t%d",a[i]);
    }
}