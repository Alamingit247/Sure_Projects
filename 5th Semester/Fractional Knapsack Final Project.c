#include<stdio.h>

void knapsack(float tcapacity, int n, float weight[], float profit[])
{

	float x[20], totalprofit = 0, capacity;
	int i, j;

	capacity = tcapacity;

	for(i=0; i<n; i++)
    {
        x[i] = 0.0;
    }

	for(i=0; i<n; i++)
	{
		if(weight[i] > capacity)
			break;
		else
		{
			x[i] = 1.0;
			totalprofit = totalprofit+profit[i];
			capacity = capacity-weight[i];
		}
	}
	if(i < n)
    {
        x[i] = capacity/weight[i];
    }

	totalprofit=totalprofit+(x[i]*profit[i]);

	printf("\nThe selected elements are:-\n");
	for(i=0; i<n; i++)
    {
		if(x[i] == 1.0)
        {
            printf("Profit is %.2f with weight %.2f \n", profit[i], weight[i]);
        }
		else if(x[i] > 0.0)
        {
            printf("%.2f part of Profit %.2f with weight %.2f\n", x[i], profit[i], weight[i]);
        }
    }
	printf("\nTotal profit for %d objects with capacity %.2f = %.2f\n\n", n, tcapacity,totalprofit);
}
int main()
{
	system("color 2");

	float weight[20], profit[20], ratio[20], t1, t2, t3, tcapacity;
	int n, i, j;

	printf("Enter number of objects:  ");
	scanf("%d", &n);

	printf("\nEnter the capacity of knapsack: ");
	scanf("%f", &tcapacity);

	for(i=0; i<n; i++)
	{
		printf("\nEnter %d(th)  profit: ", (i+1));
		scanf("%f", &profit[i]);

		printf("Enter %d(th)  weight: ", (i+1));
		scanf("%f", &weight[i]);

		ratio[i] = profit[i]/weight[i];
	}

	for(i=0; i<n; i++)
    {
        for(j=0; j<n; j++)
		{
			if(ratio[i] > ratio[j])
			{
				t1 = ratio[i];
				ratio[i] = ratio[j];
				ratio[j] = t1;
				t2 = weight[i];
				weight[i] = weight[j];
				weight[j] = t2;
				t3 = profit[i];
				profit[i] = profit[j];
				profit[j] = t3;
			}
		}
    }

	knapsack(tcapacity,n,weight,profit);

    return 0;

}
