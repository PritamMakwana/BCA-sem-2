#include<stdio.h>

void main(){
int i,j,k;
int arr[2][2][2]=
        {
              {
                {11,22},
                {44,55}
              },
              {
                   {33,66},
                   {77,88}  
              },
        };
  printf("::::3D ArrayElements are::::\n");
  for(i=0;i<2;i++){
      for(j=0;j<2;j++){
          for(k=0;k<2;k++){
              printf("%d\t",arr[i][j][k]);
          }
          printf("\n");
      }
      printf("\n");
  }
         
}