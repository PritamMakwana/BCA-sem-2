#include<stdio.h>
#define SIZE 3
int top=0;
int a[SIZE];

void main(){
    void push();
    void pop();
    void peep();
    void display();
    void update();

    int choice;
    do
    {
        printf("\n\t\t1.PUSH/Insert");
        printf("\n\t\t2.POP/Delete");
        printf("\n\t\t3.PEEP/Search");
        printf("\n\t\t4.DISPPLAY");
        printf("\n\t\t5.UPDATE");
        printf("\n\t\t0.EXIT");

        printf("\n\n\t Enter your choise:=");
        scanf("%d",&choice);

        switch(choice)
        {
            case 1:push(); display();
                break;
                case 2:pop();
                break;
                case 3:peep();
                break;
                case 4:display();
                break;
                case 5:update();
                break;
                case 0:printf("\n\t bye...bye");
                break;
                default:printf("invalid choice");
                break;
        }

    } while (choice!=0);
    
}


void push()   //1
{
    if(top==SIZE)
    printf("\n\t stack is full");
    else
    {
        printf("\n\t Enter any no:");
        scanf("%d",&a[top]);
        top++;
    }
}

void pop()      //2
{
    if(top==0)
    printf("\n\t stack is empty");
    else
    {
          top--;
          printf("\n\t Delete information= %d ",a[top]);
    }
}

void peep()     //3
{
  int i,j;
  if(top==0)
  {
      printf("\n\t stack is empty");
  }

 else{
     printf("\n\t Enter Search value:+:=");
     scanf("%d",&j);

     for(i=top-1;i>=0;i--)
     {
         if(a[i]==j)
         {
             printf("\n\t serch value found on position =%d",top-i);
             break;
         }
         if(i==-1)
         {
             printf("\n\t serach value not founal");
         }
     }
 }
}
  void display()
  {
      int i;
      if(top==0)
      {
          printf("\n\t stack is empty");
      }
      else{
          for(i=top-1;i>=0;i--)
          {
              printf("\n\t %d",a[i]);
          }
      }
  }

  void update()
  {
      int i,j;
      if(top==0)
      {
          printf("\n\t stack is empty");
        
      }
      printf("\n\t found values:=");
      scanf("%d",&j);

      for(i=top-1;i>=0;i--)
      {
          if(a[i]==j)
          {
              printf("\n\t serach value foundon position=%d",top-1);
              printf("\n\t enter new value:");
              scanf("%d",&a[i]);
              break;
          }
      }
  
  if(i==1)
  {
      printf("\n\t update value not found");
  }

}
