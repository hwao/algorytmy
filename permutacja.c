#include<stdio.h>

const int l = 12;

void printr(int * a ) {
	int i = 0;
	printf("[ ");
	for(; i < l+1; i++) {
		printf("%d ", a[i] );
	}
	printf("] \n");
}

void swap( int * a, int i, int j ) {
	int t = a[i];
	a[i] = a[j];
	a[j] = t;
}

void reverse(int * a, int m ) {
	int i = 1;
	int j = m;
	while( i < j ) {
		swap( a,i,j );
		i+=1;
		j-=1;
	}
}

void antylex( int *p, int m ) {
	if( m == 1 ) {
		//printr( p );
	} else {
		int i = 1;
		for(;i<=m; i++) {
			antylex( p, m-1 );
			if( i < m ) {
				swap( p, i, m );
				reverse( p, m-1);
			}
		}
	}
}

int main( int argc, char *argv[] )
{

	int n = l;
	int a[n];

	int i = 0;
	for(; i < n+1; i++ ) {
		a[i] = i;
	}

	antylex(a, n );

	return(0);
}
