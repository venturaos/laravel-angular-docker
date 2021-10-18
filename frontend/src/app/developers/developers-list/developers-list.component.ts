import { Component, OnInit } from '@angular/core';
import { NgbModal, ModalDismissReasons } from '@ng-bootstrap/ng-bootstrap';

import { Developer } from '../class/Developer';

@Component({
  templateUrl: './developers-list.component.html',
  styleUrls: ['./developers-list.component.scss']
})

export class DevelopersListComponent implements OnInit {

  developersList: Developer[] = [
    new Developer(1,'Russia','f/f3/Flag_of_Russia.svg',17075200,'sei não :(', { day: 14, month: 10, year: 2021 }),
    new Developer(2,'Canada','c/cf/Flag_of_Canada.svg',9976140,'sei não :(', { day: 14, month: 10, year: 2021 }),
    new Developer(3,'United States','a/a4/Flag_of_the_United_States.svg',9629091,'sei não :(', { day: 14, month: 10, year: 2021 }),
    new Developer(4,'China','f/fa/Flag_of_the_People%27s_Republic_of_China.svg',9596960,'sei não :(', { day: 14, month: 10, year: 2021 })
  ];

  constructor(private modalService: NgbModal) { }

  ngOnInit(): void {
    
  }

  open(modal: any) {
    this.modalService.open(modal);
  }

  deleteDeveloper(modal: any) {
    this.modalService.dismissAll();
    alert('Excluindo registro');
    //TODO: fazer requisição pro back
  }
}
