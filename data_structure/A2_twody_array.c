#include<stdio.h>

void main(){
    int arr[2][2],i,j;
    for(i=0;i<2;i++){
        for(j=0;j<2;j++){
            printf("\n Enter arr[%d][%d]:=",i,j);
            scanf("%d",&arr[i][j]);
        }
    }
    printf("the Enter element arr\n");
    for(i=0;i<2;i++){
        for(j=0;j<2;j++){
            printf("%d\t",arr[i][j]);
        }
        printf("\n");
    }
}