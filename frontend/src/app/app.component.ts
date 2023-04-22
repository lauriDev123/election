import { AfterViewInit, Component, Input, OnInit } from '@angular/core';

@Component({
  selector: 'app-root',
  templateUrl: './app.component.html',
  styleUrls: ['./app.component.scss']
})
export class AppComponent implements OnInit, AfterViewInit{
  
  title = 'elections frontend';

  nbr: number = 15;
  nbr2: number = 0;
  
  ngOnInit() {

  }

  ngAfterViewInit(): void {
    this.nbr2 = this.factoriel(this.nbr);
  }

  factoriel(n: number): number {
    if(n==0){
      return 1;
    }else{
      return n * this.factoriel(n - 1);
    }

    console.log(this.nbr2);
  }
}
