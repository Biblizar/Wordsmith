/**
 * Import
 */
import React from 'react';
import PropTypes from 'prop-types';
import { Whiteboard } from '@ohtomi/react-whiteboard';

/**
 * Local import
 */
// Composants

// Styles et assets
import './board.sass';

/**
 * Code
 */
class Board extends React.Component {
  static propTypes = {
    drawColor: PropTypes.string.isRequired,
    drawing: PropTypes.bool.isRequired,
    eventStream: PropTypes.object.isRequired,
    eventStore: PropTypes.object.isRequired,
    // shareDrawing: PropTypes.func.isRequired,
  }

  componentDidMount() {
    console.log('board loaded');
  }

  requestColorChange = () => {
    const { eventStream, drawColor } = this.props;
    eventStream.changeStrokeColor(drawColor);
    console.log('event stream? ', eventStream);
  }

  // requestUndoChange = () => {
  //   const { eventStream, eventStore } = this.props;
  //   eventStream.undo();
  //   console.log('event stream? ', eventStream);
  //   console.log('event store? ', eventStore);
  // }

  render() {
    const {
      drawing, eventStore, eventStream,
    } = this.props;
    console.log(drawing ? 'start drawing' : 'stop drawing');
    return (
      <div
        className="board"
        onClick={this.requestColorChange}
      >
        <Whiteboard
          events={eventStream}
          eventStore={eventStore}
          // onChange={() => {console.log('onchange')}}
          width="100%"
          height="100%"
          style={{
            backgroundColor: 'lightyellow',
            color: 'blue',
          }}
        />
      </div>
    );
  }
}

/**
 * Export
 */
export default Board;