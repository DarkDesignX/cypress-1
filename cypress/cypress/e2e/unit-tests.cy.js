/// <reference types="Cypress" />

describe("fizzbuzz function", () => {
    // If you get the error that 'window.fizzbuzz' is undefined, simply replace 'before' with 'beforeeach'
    beforeEach(() => {
      cy.visit('localhost')
    })
  
    it('write fizz if number is dividible by 3', () => {
      cy.window().then((window) => {
        const result = window.fizzbuzz(3)

        assert.equal(result, 'Fizz')
      })
    })

    it('write buzz if number is dividible by 5', () => {
      cy.window().then((window) => {
        const result = window.fizzbuzz(5)

        assert.equal(result, 'Buzz')
      })
    })
  })